<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\NewUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException; //response json
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Http\Request;

class RegisterController extends Controller {
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
    //protected $redirectTo = '/home';
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    public function register(NewUserRequest $request) {
        
        event(new Registered($user = $this->create($request->validated())));

        $this->guard()->login($user);

        return $this->registered($request, $user) ?: response()->json(['redirect' => route('home')]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'nome' => ['required', 'string', 'max:20'],
                    'cognome' => ['required', 'string', 'max:20'],
                    'email' => ['required', 'string', 'email', 'max:50', 'unique:utente'],
                    'username' => ['required', 'string', 'min:5', 'unique:utente'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'residenza' => ['required', 'string', 'max:50'],
                    'data_nasc' => ['required'],
                    'occupazione' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        return User::create([
                    'nome' => $data['nome'],
                    'cognome' => $data['cognome'],
                    'email' => $data['email'],
                    'username' => $data['username'],
                    'password' => Hash::make($data['password']),
                    'occupazione' => $data['occupazione'],
                    'residenza' => $data['residenza'],
                    'data_nasc' => $data['data_nasc']
        ]);
    }
    
    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }

}
