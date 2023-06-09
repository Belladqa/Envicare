<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Http\Request;
// use Auth;

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
        // $this->middleware('guest:admin')->except('logout');
        // $this->middleware('guest:officer')->except('logout');
        // $this->middleware('guest:member')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    // public function showAdminLoginForm()
    // {
    //     return view('auth.login', ['url' => 'login']);
    // }

    // public function adminLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'username'   => 'required|username',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {

    //         return redirect()->intended('/home');
    //     }
    //     return back()->withInput($request->only('username', 'remember'));
    // }

    // public function showOfficerLoginForm()
    // {
    //     return view('auth.login', ['url' => 'loginofficer']);
    // }

    // public function OfficerLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'username'   => 'required|username',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (Auth::guard('username')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {

    //         return redirect()->intended('/homeofficer');
    //     }
    //     return back()->withInput($request->only('username', 'remember'));
    // }

    // public function showMemberLoginForm()
    // {
    //     return view('auth.login', ['url' => 'loginmember']);
    // }

    // public function MemberLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'username'   => 'required|username',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (Auth::guard('username')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {

    //         return redirect()->intended('/homemember');
    //     }
    //     return back()->withInput($request->only('username', 'remember'));
    // }
}
