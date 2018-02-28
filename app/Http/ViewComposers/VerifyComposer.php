<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Auth;
use App\Verify;

class VerifyComposer
{
    public function compose(View $view) {
      if(Auth::check()) {
        $verify = Verify::where('user_id', Auth::user()->id)->count();
        $view->with('verify' , $verify);
      }
    }
}
