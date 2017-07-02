<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Obfuscate;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(){

        Auth::logout();

        return response()->json([

                'success' => true,
                'message' => 'You have successfully logout.'

            ]);
    }

    protected function sendLoginResponse(Request $request ) {
        $this->clearLoginAttempts($request);

            
        return response()->json([

            'message' => 'You have successfully Log-in.',
            'user' => ['name' => Auth::User()->name, 'id' => Obfuscate::encode(Auth::User()->id)],
            'error' => false

            ]);
    }

    /**
     * Get the failed login response instance.
     *
     * @return \Illuminate\Http\Response
     */
    protected function sendFailedLoginResponse() {
        return response()->json([
            'message' =>  'Invalid Username or Password',
            'error' => true
            ], 422);
    }

    /**
     * Error after determining they are locked out.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLockoutResponse(Request $request) {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );

        return response()->json([

            'message' => 'Too Many Attempts. Please wait ' . $seconds . ' seconds!',
            'error' => true
        ]);
    }

    protected function hasTooManyLoginAttempts(Request $request)
    {
        $lockoutTime = 60 / 60;    //lockout after 10 seconds (setting is in minutes hence devision by 60 for setting the time in seconds)

        $maxLoginAttempts = 5;    //lockout after 5 attempts

        return $this->limiter()->tooManyAttempts(
            $this->throttleKey($request), $maxLoginAttempts, $lockoutTime
        );
    }


}
