<?php

namespace App\Http\Controllers\v1\web;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\MessageNotifMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function sendMessage()
    {
        $req = request();
        try {
            $message = new Message();
            $message->full_name = $req->full_name;
            $message->email = $req->email;
            $message->subject = $req->subject;
            $message->text = $req->text;
            $message->created_at = now("Africa/Casablanca");
            $message->updated_at = now("Africa/Casablanca");
            $message->save();
            // dd($message->email);

            Mail::to("contact@benmoussaconsulting.com")->send(new MessageNotifMail($message));

            return response()->json(['message' => "تم ارسال رسالتك بنجاح"]);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }
}
