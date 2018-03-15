<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'first_name', 'last_name', 'cell_number', 'home_number', 'country', 'date_of_birth', 'occupation', 'funds', 'referral_id',
        'address', 'postal_address', 'email', 'password', 'role', 'google2fa_secret',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'google2fa_secret',
    ];

    public function setGoogle2faSecretAttribute($value)
    {
         $this->attributes['google2fa_secret'] = encrypt($value);
    }

    public function getGoogle2faSecretAttribute($value)
    {
        return decrypt($value);
    }

    public function register_authy() {
    $authy_api = new AuthyApi(getenv('AUTHY_API_KEY'));
    $user = $authy_api->registerUser($this->email, $this->phone_number, $this->country_code); //email, cellphone, country_code

    if($user->ok()) {
     $this->authy_id = $user->id();
     $this->save();
     return true;
    } else {
      // something went wrong
      return false;
    }
  }

}
