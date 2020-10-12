<?php

use App\Models\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = new Banner();
        $banner->title = "I am a web developer";
        $banner->name = "Abir Ahmad";
        $banner->image = "images";
        $banner->description = "This test description";
        $banner->save();
    }
}
