<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;

class Menu extends Model
{
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
