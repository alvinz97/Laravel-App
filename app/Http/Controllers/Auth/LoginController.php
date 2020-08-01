<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginHistoryController;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('guest')->except([
            'logout',
            'locked',
            'unlock'
        ]);
        
    }
    
    public function locked() {

        if(!session('lock-expires-at')){
            return redirect('/home');
        }

        if(session('lock-expires-at') > now()){
            return redirect('/');
        }

        return view('auth.lock');
    }

    public function unlock(Request $request){

        $historyController = new LoginHistoryController;
        return $historyController->create(Auth::id());

        $check = Hash::check($request->input('password'), $request->user()->password);

        if (!$check) {
            return redirect()->route('login.locked')->withErrors([
                'Your password does not match your profile.'
            ]);
        }

        session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);

        return redirect('/');
    }

    protected function credentials(Request $request)
    {
        $user = User::select('*')->where('email', $request->{$this->username()})->first();
        $user_id = $user->id;

        $this->getId($user_id);

        return [
            'email' => $request->{$this->username()},
            'password' => $request->password,
        ];

        // return $cre and $histories;
    }

    public function getId($id) {
        $historyController = new LoginHistoryController;
        return $historyController->create($id);
    }

    public function sendID($user_id)
    {
        $historyController = new LoginHistoryController;
        return $historyController->setLogoutTime($user_id);
    }

    public function logout(Request $request)
    {
        $this->sendID(auth()->user()->id);

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/');
    }

}
