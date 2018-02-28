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
    protected $redirectTo = '/Verify';

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
          'title' => 'required|string|max:25',
          'first_name' => 'required|string|max:255',
          'last_name' => 'required|string|max:255',
          'cell_number' => 'required|string|max:255',
          'home_number' => 'nullable|string|max:255',
          'country' => 'required|string|max:255',
          'date_of_birth' => 'required|date',
          'occupation' => 'required|string|max:255',
          'funds' => 'required|string|max:255',
          'referral_id' => 'nullable|integer|max:255',
          'address' => 'required|string|max:255',
          'postal_address' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
          'title' => $data['title'],
          'first_name' => $data['first_name'],
          'last_name' => $data['last_name'],
          'cell_number' => $data['cell_number'],
          'home_number' => $data['home_number'],
          'country' => $data['country'],
          'date_of_birth' => $data['date_of_birth'],
          'occupation' => $data['occupation'],
          'funds' => $data['funds'],
          'referral_id' => $data['referral_id'],
          'address' => $data['address'],
          'postal_address' => $data['postal_address'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
        ]);
    }
}
