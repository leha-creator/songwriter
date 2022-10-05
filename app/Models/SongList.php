<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SongList extends Model
{
    use HasFactory;

    protected $table = 'song_lists';

    protected $fillable = [
        'name',
        'planned_date'
    ];

    /**
     * @return BelongsToMany
     */
    public function songs()
    {
        return $this->belongsToMany(Song::class, 'song_song_list', 'song_list_id', 'song_id');
    }
}
