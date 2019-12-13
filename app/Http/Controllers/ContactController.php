<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cont;
class ContactController extends Controller
{

   public function Contact()
   {
       return view('contactus');
   }

   public function store()
   {
       $data= new cont;
       $data->name =request('name');
       $data->email= request('email');
       $data->phone_number= request('phone_number');
       $data->subject= request('subject');
       $data->description= request('description');
       $data->save();

   }
}