<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Libraries\Cookie;

class ProfileController extends Controller
{
    public function index()
    {
        try {
            $token = Cookie::get('_tk');
            
            # Validate login
            $response = Http::withToken($token)->get(config('api.url').'user/login/validate')->object();
            if(! $response->success) {
                Cookie::remove('_tk');
                return redirect()->route('client.login');
            }

            # Fetch client profile
            $response = Http::withToken($token)->get(config('api.url').'user/me')->object();
            
            return view('client.profile', ['user' => $response->data]);

        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        $response = Http::get(config('api.local').'user/profile/me');
    }
}
