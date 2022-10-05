<?php

namespace App\Http\Controllers;

use App\Http\Resources\SongListCollection;
use App\Http\Resources\SongListWithSongsResource;
use App\Models\SongList;
use App\Http\Requests\StoreSongListRequest;
use App\Http\Requests\UpdateSongListRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SongListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $songLists = SongList::all();
        return response()->json($songLists)->setStatusCode(200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSongListRequest $request
     * @return JsonResponse
     */
    public function store(StoreSongListRequest $request): JsonResponse
    {
        $data = $request->validated();

        $songList = SongList::create([
            "name" => $data["name"],
            "planned_date" => $data["planned_date"],
        ]);

        $songs = $data['songs'];

        $attachSongs = [];

        for ($songIndex = 0; $songIndex < count($songs); $songIndex++) {
            $attachSongs[$songs[$songIndex]['id']] = ['song_number' => $songs[$songIndex]['song_number']];
        }

        $songList->songs()->attach($attachSongs);

        return response()->json($songList)->setStatusCode(200);
    }

    /**
     * Display the specified resource.
     *
     * @param SongList $songList
     * @return JsonResponse
     */
    public function show(SongList $songlist)
    {
        $songlist["songs"] = $songlist->songs;
        return response()->json($songlist)->setStatusCode(200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SongList $songList
     * @return Response
     */
    public function edit(SongList $songList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSongListRequest $request
     * @param SongList $songList
     * @return Response
     */
    public function update(UpdateSongListRequest $request, SongList $songList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SongList $songList
     * @return JsonResponse
     */
    public function destroy(SongList $songlist): JsonResponse
    {
        $songlist->delete();
        return response()->json()->setStatusCode(200);
    }
}
