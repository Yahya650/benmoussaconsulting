<?php

namespace App\Http\Controllers\v1\leads_form;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewLeadNotifMail;

class ClientsController extends Controller
{
    public function getLeadForm()
    {
        return view('v1.leads_form.form');
    }

    public function PostLeadForm()
    {


        $oldClient = Client::where('phone_number', request()->phone_number)->first();
        if ($oldClient) {
            return response()->json([
                'message' => "عميل مسجل لدينا بالفعل. 📋\nيرجى التواصل معنا على الأرقام التالية لتحديد موعدك الجديد: 📞\n0520816447 / 0665228542"
            ], 400);
        }
        try {
            $req = request();
            $client = new Client();
            $client->full_name = $req->full_name;
            $client->phone_number = $req->phone_number;
            $client->campaign_name = $req->campaign_name ? $req->campaign_name : null;
            $client->adset_name = $req->adset_name ? $req->adset_name : null;
            $client->ad_name = $req->ad_name ? $req->ad_name : null;
            $client->created_at = now("Africa/Casablanca");
            $client->updated_at = now("Africa/Casablanca");
            $client->save();

            // Pass the $client object as part of the data array
            Mail::to("contact@benmoussaconsulting.com")->send(new NewLeadNotifMail($client));

            return response()->json(['redirect' => route('confirmation.message', ['client' => cryptID($client->id)])]);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }




    public function showConfirmation(Request $request)
    {

        $client = Client::where('id', dcryptID($request->client))->first();

        if (!$client) {
            return redirect()->route('web.home');
        }

        return view('v1.leads_form.success_page', compact('client'));
    }
}
