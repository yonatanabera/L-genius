<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $activeUser=User::where('email', $user->email)->first();
        $avatarLarge=str_replace('type=normal', 'type=large', $user->avatar);
        if($activeUser){
            
             
            $activeUser->name=$user->name; 
            $activeUser->fb_photo=$avatarLarge;
            $activeUser->save();
            Auth::login($activeUser);
            return redirect(route('home.index'));
        }else{
            $activeUser=new User;
            $activeUser->name=$user->name; 
            $activeUser->email=$user->email;
            $activeUser->password=bcrypt($user->token." ".$user->name);
            $activeUser->fb_photo=$avatarLarge;
            $activeUser->save();
            Auth::login($activeUser);
            return redirect(route('home.index'));
        }
    }



    // Google Login

       /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProviderGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallbackGoogle()
    {
        $user = Socialite::driver('google')->user();

        $activeUser=User::where('email', $user->email)->first();
        $avatarLarge=str_replace('type=normal', 'type=large', $user->avatar);
        if($activeUser){
            
             
            $activeUser->name=$user->name; 
            $activeUser->fb_photo=$avatarLarge;
            $activeUser->save();
            Auth::login($activeUser);
            return redirect(route('home.index'));
        }else{
            $activeUser=new User;
            $activeUser->name=$user->name; 
            $activeUser->email=$user->email;
            $activeUser->password=bcrypt($user->token." ".$user->name);
            $activeUser->fb_photo=$avatarLarge;
            $activeUser->save();
            Auth::login($activeUser);
            return redirect(route('home.index'));
        }
    }
}
