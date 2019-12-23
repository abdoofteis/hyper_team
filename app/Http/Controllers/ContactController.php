<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userfteis;
class ContactController extends Controller
{

   public function Contact()
   {
       return view('contactus');
   }

   public function store()
   {

    request()->validate([
        'name' => 'required',
        'email' => 'required',
        'phone_number' => 'required'

    ]);

       $data= new userfteis;
       $data->name =request('name');
       $data->email= request('email');
       $data->phone_number= request('phone_number');
       $data->subject= request('subject');
       $data->description= request('description');
       $data->save();
       return redirect('hyperteam/');
   }
}