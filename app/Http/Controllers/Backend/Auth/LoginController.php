<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function showLoginForm()
    {
         if (Auth::check()) {
            return redirect('/admin');
        }
        return view('backend.auth.login');
    }


     public function login(Request $request)
    {


        //Validate the form data
        $request->validate([
            'username'         => 'required',
            'password'         => 'required|min:6'
        ]);

        //Attempt to log the employee in
        if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {

            //If successful then redirect to the intended location
            session()->flash('success', 'Successfully Logged In');
            return redirect()->intended(route('admin.index'));
        } else {
            if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
                //If successful then redirect to the intended location
                session()->flash('success', 'Successfully Logged In');
                return redirect()->intended(route('admin.index'));
            } else {
                //If unsuccessfull, then redirect to the admin login with the data
                Session::flash('login_error', "Incorrect username and password");
                return redirect()->back()->withInput($request->only('username', 'remember'));
            }
        }
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('web')->except('logout');
    // }

   public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        // $user->token;
        $user = User::firstOrCreate([
                'fullname'=>$user->getName(),
                'email'=>$user->getEmail(),
                'provider_id'=>$user->getId(),
                'user_avatar'=>$user->getAvatar()

        ]);

        Auth::Login($user,true);
        return redirect('/admin');


    }
}
