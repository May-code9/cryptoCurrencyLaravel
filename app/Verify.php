<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verify extends Model
{
    protected $fillable = [
      'user_id' ,'id_card', 'resident_address'
    ];
}
