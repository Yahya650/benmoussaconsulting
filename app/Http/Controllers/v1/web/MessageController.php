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
        // dd($req->all());
        try {
            $message = new Message();
            // $message->full_name = $req->full_name; // V1
            $message->full_name = $req->last_name . " " . $req->first_name; // V2
            $message->email = $req->email;
            $message->phone_number = $req->phone_number; // V2
            $message->subject = $req->subject;
            $message->text = $req->text;
            $message->created_at = now("Africa/Casablanca");
            $message->updated_at = now("Africa/Casablanca");
            $message->save();
            // dd($message->email);

            Mail::to("contact@benmoussaconsulting.com")->send(new MessageNotifMail($message));

            return response()->json(['message' => __('messages.success_message')]);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }
}
