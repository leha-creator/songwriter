<?php

namespace App\Http\Controllers;

use App\Models\SongList;
use App\Http\Requests\StoreSongListRequest;
use App\Http\Requests\UpdateSongListRequest;

class SongListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSongListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSongListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SongList  $songList
     * @return \Illuminate\Http\Response
     */
    public function show(SongList $songList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SongList  $songList
     * @return \Illuminate\Http\Response
     */
    public function edit(SongList $songList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSongListRequest  $request
     * @param  \App\Models\SongList  $songList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSongListRequest $request, SongList $songList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SongList  $songList
     * @return \Illuminate\Http\Response
     */
    public function destroy(SongList $songList)
    {
        //
    }
}
