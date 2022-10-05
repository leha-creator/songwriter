<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Psy\Util\Json;
use Spatie\LaravelIgnition\Commands\SolutionProviderMakeCommand;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $songs = Song::all();
        return response()->json($songs)->setStatusCode(200);
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
     * @param StoreSongRequest $request
     * @return JsonResponse
     */
    public function store(StoreSongRequest $request): JsonResponse
    {

        $data = $request->validated();
        $data["songcontent"] = json_decode($data["songcontent"]);
        $song = Song::create($data);
        return response()->json($song)->setStatusCode(200);

    }

    /**
     * Display the specified resource.
     *
     * @param Song $song
     * @return JsonResponse
     */
    public function show(Song $song): JsonResponse
    {

        dd($song);
        return response()->json($song)->setStatusCode(201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Song $song
     * @return Response
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSongRequest $request
     * @param Song $song
     * @return JsonResponse
     */
    public function update(UpdateSongRequest $request, Song $song)
    {
        $data = $request->validated();
        $data["songcontent"] = json_decode($data["songcontent"]);
        $song->update($data);
        return response()->json($song)->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Song $song
     * @return JsonResponse
     */
    public function destroy(Song $song): JsonResponse
    {
        $song->delete();

        return response()->json()->setStatusCode(200);
    }
}
