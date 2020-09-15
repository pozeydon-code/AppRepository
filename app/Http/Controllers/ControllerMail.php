<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class ControllerMail extends Controller
{
    public function index(){
        return view('contactanos');
    }
    public function send(Request $request){
        $this->validate($request, [
            'name'     =>  'required',
            'apellido'     =>  'required',
            'email'  =>  'required|email',
            'telefono'     =>  'required',
            'message' =>  'required'
           ]);
           
         $data = array(
              'name'      =>  $request->input('name'),
              'apellido'  =>  $request->input('apellido'),
              'message'   =>   $request->input('message'),
              'telefono'   =>   $request->input('telefono')
          );
      
          $email = $request->input('email');
      
        Mail::to($email)->send(new SendMail($data));
        
        return redirect()->back() ->with('alert', 'Updated!');

    }
}
