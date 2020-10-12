<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Track;
use App\Models\Count;
use App\Models\Menu;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Mail;
use App\Mail\PortfolioEmail;

class PortfolioHomeController extends Controller
{

    public function __construct()
    {
        $count = Count::first();
        $views = $count->view;
        $ip_address = request()->ip();
        // $MAC = exec('getmac');
        // $MAC = strtok($MAC, ' '); 
        // dd($MAC);

        Track::newTrack($ip_address);
        Count::newCount($views);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('id', 'desc')->get();

        //Share Count
        $count = Count::first();
        $shares = $count->shares;
        Count::newCountShare($shares);


        $portfolios = Portfolio::orderBY('id', 'desc')
            // ->where('menu_id',$id)
            ->select('id', 'project_title', 'thumbnail', 'menu_id')
            ->get();
        // dd($portfolios);
        $user = User::first();
        if ($user->theme_id == 1) {
            return view('frontend.index', compact('menus', 'portfolios'));
        } else {
            return view('frontend.index_dark', compact('menus', 'portfolios'));
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // dd(request()->all());
        // $data = request()->validate([
        //     'name' => 'required',
        //     'number' => 'required',
        //     'email' => 'required',
        //     'subject' => 'required',
        //     'message' => 'required',
        // ]);

        $data = request()->all();
        //sending mail

        Mail::to('test@test.com')->send(new PortfolioEmail($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio_details = Portfolio::find($id);
        $user = User::first();

        if (!is_null($portfolio_details)) {
            if ($user->theme_id = 1) {
                return view('frontend.show_light', compact('portfolio_details', 'user'));
            } else {
                return view('frontend.show_dark', compact('portfolio_details', 'user'));
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
