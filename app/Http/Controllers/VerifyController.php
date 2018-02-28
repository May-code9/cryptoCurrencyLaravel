<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Verify;

class VerifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
          $verify = Verify::where('user_id', Auth::user()->id)->count();
          if($verify == 0) {
            return view('auth.upload');
          } else {
            return redirect('/');
          }
        } else {
          return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'user_id' => 'required|integer',
          'id_card' => 'required|image',
          'resident_address' => 'required|image',
        ]);
        $user_id = $request->input('user_id');
        $id_card = $request->file('id_card');
        $resident_address = $request->file('resident_address');

        $idCardName = time().'.'.$id_card->getClientOriginalExtension();
        $residentAddressName = time().'1.'.$resident_address->getClientOriginalExtension();

        $destinationPath = public_path('/subscriber');

        $thumb_img = Image::make($id_card->getRealPath());
        $thumb_img->save($destinationPath.'/'.$idCardName);

        $thumb_img2 = Image::make($resident_address->getRealPath());
        $thumb_img2->save($destinationPath.'/'.$residentAddressName);

        $verify = new Verify;
        $verify->user_id = $user_id;
        $verify->id_card = $idCardName;
        $verify->resident_address = $residentAddressName;

        $verify->save();

        return redirect('/')->with("success_status", "Verification Process will be complete in 24 hours, provided all details are correct and up to date");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
