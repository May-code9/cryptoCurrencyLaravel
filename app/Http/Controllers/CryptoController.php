<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoController extends Controller
{
    public function __construct()
    {
        $this->middleware('2fa');
    }
    public function index() {
      $index = "active";
      return view('pages.index', compact('index'));
    }
    public function about() {
      $about = "active";
      return view('pages.about-us', compact('about'));
    }
    public function contact() {
      $contact = "active";
      return view('pages.contact', compact('contact'));
    }
    public function services() {
      $services = "active";
      return view('pages.services', compact('services'));
    }
    
}
