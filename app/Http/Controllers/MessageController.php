<?php

namespace App\Http\Controllers;

use App\Mail\MessagesReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        
        //Enviar Emails
        Mail::to('urielreyes514@gmail.com')->send(new MessagesReceived($message));
        
        return back()->with('success','Recibimos tu mensaje te responderemos en menos de 24hrs.');
    }
}
