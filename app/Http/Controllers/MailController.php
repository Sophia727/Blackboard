<?php

namespace App\Http\Controllers;

use App\Mail\UserCreatedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    public function sendEmail() {
        $email = 'positronx@gmail.com';
   
        $mailData = [
            'title' => 'Demo Email',
            'url' => 'https://www.positronx.io'
        ];
  
        Mail::to($email)->send(new UserCreatedNotification($mailData));
   
        return response()->json([
            'message' => 'Email has been sent.'
        ], Response::HTTP_OK);
    }
}
