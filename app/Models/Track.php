<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip_address', 'updated_by', 'deleted_by'
    ];

    /**
     * newTrack
     *
     * @param string $title
     * @param string $description
     * @return void Create new track entry after any action
     */
    public static function newTrack($ip_address)
    {
        $track = new Track();
        $track->ip_address = $ip_address;
        $track->save();
    }

  
}
