<?php

namespace App\Http\Controllers\Client\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Libraries\Cookie;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        #dd(cookie('_token'));
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $uri = config('api.url') . "user/login";

        $validatedData = $request->validate([
            'user_name' => ['required'],
            'password' => ['required']
        ], $request->only(['user_name', 'password']));

        $response = Http::post($uri, $validatedData)->object();

        if($response->success) {
            Cookie::make('_tk', $response->data->token, time() + 3600);
            
            return redirect()->route('home');
        } 

    }
}
