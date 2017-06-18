<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required',
            'password' => 'required|string|min:6|same:confirm_password',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function emailUnique(){

        $request = app()->make('request');

        $validator =  Validator::make($request->all(), [
                'email' => 'unique:users'
            ]);

        if($validator->fails()){
            $email = $validator->messages();
            
            return response()->json([
                    'email' => $email->toArray()['email'][0],
                    'success' => false
                ]);
        }

        return response()->json([
                'success' => true
            ]);
    }

    public function phoneUnique(){

        $request = app()->make('request');
        $validator =  Validator::make($request->all(), [
                'phone_number' => 'unique:users'
            ]);

        if($validator->fails()){

            $email = $validator->messages();
            
            return response()->json([
                    'phone_number' => $email->toArray()['phone_number'][0],
                    'success' => false
                ]);
        }

        return response()->json([
                'success' => true
            ]);
    }

     public function register() {

        $request = app()->make('request');

        $validator = $this->validator($request->all());

        if($validator->fails()){
            return response()->json([
                 $validator->errors()->getMessages(), 
                'error' => true
                ]);
        }
        
        $this->create($request->all());

        return response()->json([

                'message' => 'We have send a confirmation link to your email!', 
                'error' => false

            ]);

        //$this->guard()->login($user);

        //return $this->registered($request, $user)
         //   ?: redirect($this->redirectPath());
    }
}
