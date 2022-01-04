<?php

namespace App\Repositories;

use App\Libraries\Filter;
use App\Libraries\Guzzle;
use Illuminate\Support\Facades\Cache;

class ServiceRepository
{
    public function all()
    {
        # TODO: Fix bug COVID-19 Test and COVID-19 Test - Rapid Antigen not being return by filter
        if(Cache::has('services')) {
            $services = Cache::get('services');
        } else {
            $result = Guzzle::get('https://www.serbees.com/api/V1/service/all');
            $services = Filter::services($result['data'])->get([
                'Cleaning (House)',
                'Laundry',
                'Aircon cleaning and Repairs',
                'Massage',
                'Haircut',
                'Manicure/Pedicure',
                'Pet Grooming'
//                'COVID-19 Test',
//                'COVID-19 Test - Swab Antigen',
//                'COVID-19 Test - Rapid Antigen'
            ]);
            Cache::put('services', $services, now()->addDays(30));
        }

        return $services;
    }

    public function findById($id)
    {
        $result = Guzzle::get('https://www.serbees.com/api/V1/service/'.$id.'/id');
        return $result['data'];
    }
}
