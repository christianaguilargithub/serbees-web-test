<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function registration(){
        return view('pages.registration');
    }
    public function bookingHour(){
        return view('pages.booking-hour');
    }
    public function bookingDayRange(){
        return view('pages.booking-day-range');
    }
    public function bookingFixed(){
        return view('pages.booking-fixed');
    }
    public function bookingCovidTest(){
        return view('pages.booking-covid-test');
    }
      public function bookingCovidTest2(){
        return view('pages.booking-covid-test2');
    }
    public function bookingCovidTest3(){
        return view('pages.booking-covid-test3');
    }
    public function login(){
        return view('pages.login');
    }
    public function services(){
        return view('pages.services');
    }


}
