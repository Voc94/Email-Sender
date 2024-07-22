<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\Email;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/send',function(){
    $data = ['title'=>'Sa traiti Domnule','content'=>'Test Mesaj de Pe Laravel'];
    Mail::send('emails.test',$data,function($message){
       $message->to('popavasile02@yahoo.com','Vasi')->subject('Testing my Laravel on Me');
    });
    return "Email Sent!";
});
