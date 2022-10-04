<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "songcontent"
    ];

    protected $casts = [
        'songcontent' => 'array',
    ];

    /**
     * @return BelongsToMany
     */
    public function song_lists(): BelongsToMany
    {
        return $this->belongsToMany(SongList::class, 'song_song_list', 'song_id', 'song_list_id');
    }
}
