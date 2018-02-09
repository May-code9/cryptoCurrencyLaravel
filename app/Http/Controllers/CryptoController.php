<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoController extends Controller
{
    public function index() {
      return view('pages.index');
    }
    public function about() {
      return view('pages.about-us');
    }
    public function contact() {
      return view('pages.contact');
    }
    public function services() {
      return view('pages.services');
    }
}
