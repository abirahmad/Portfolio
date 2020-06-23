<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\UploadHelper;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;
use Auth;
use DB;

class AdminController extends Controller
{

    public function __construct()
        {
            $this->middleware('auth');
            $this->middleware(function ($request, $next) {
                $this->user = Auth::user();

                return $next($request);
            });
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user=User::first();
        return view('backend.admin.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         
        $request->validate([
            'fullname'  => 'required|max:100',
            'username'  => 'required|max:100',
            'email'  => 'required|max:100',
        ]);

        try {
            DB::beginTransaction();
            $user = User::find($id);
            $user->fullname = $request->fullname;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->age = $request->age;
            $user->birthday = $request->birthday;
            $user->interests = $request->interests;
            $user->city = $request->city;
            $user->degree = $request->degree;
            $user->institution = $request->institution;
            $user->profession = $request->profession;
            $user->address = $request->address;
            $user->website = $request->website;
            $user->phone = $request->phone;
            $user->theme_id = $request->theme_id;
            $user->description = $request->description;
             if ($request->user_avatar) {
                $user->user_avatar = UploadHelper::update('image', $request->user_avatar, $request->username . '-' . time(), 'public/backend/images/profile', $user->user_avatar);
            }
            if (!is_null($request->password)) {
                $user->password = Hash::make($request->password);
            }
            $user->created_at = Carbon::now();
            $user->updated_at = Carbon::now();
            $user->save();

            DB::commit();
            session()->flash('success', 'User has been updated successfully !!');

            return redirect()->route('admin.users.edit');
        } catch (\Exception $e) {
            // session()->flash('db_error', 'Error On: '."File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            session()->flash('db_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
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
