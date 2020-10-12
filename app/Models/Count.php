<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{


	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'view', 'shares', 'updated_by', 'deleted_by'
    ];
      /**
     * newTrack
     *
     * @param string $title
     * @param string $description
     * @return void Create new track entry after any action
     */
    public static function newCount($view)
    {
        $count = Count::first();
        $count->view = $view+1;
        $count->save();

    }

      /**
     * newTrack
     *
     * @param string $title
     * @param string $description
     * @return void Create new track entry after any action
     */
    public static function newCountShare($shares)
    {
        $count = Count::first();
        $count->shares = $shares+1;
        $count->save();

    }
}
