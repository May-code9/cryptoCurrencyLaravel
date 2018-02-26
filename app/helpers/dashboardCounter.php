<?php
use App\User;

  function getSubscribers() {
    $countSubscriber = User::where('role', 0)->count();
    return $countSubscriber;
  }

  function getSuperAdmin() {
    $countSubscriber = User::where('role', 4)->count();
    return $countSubscriber;
  }

  function getAdmin() {
    $countSubscriber = User::where('role', 3)->count();
    return $countSubscriber;
  }
