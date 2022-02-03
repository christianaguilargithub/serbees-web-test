<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Libraries\Cookie;
use Illuminate\Support\Facades\Http;

class Bookings extends Component
{
    public $bookings;
    public $active;
    public $page = 1;
    public $total_pages;

    public function mount()
    {
        $this->all();
    }

    public function render()
    {
        return view('livewire.client.bookings');
    }

    public function all()
    {
        $this->fetch('all');
        $this->active = 'all';
    }

    public function request()
    {
        $this->fetch('PENDING');
        $this->active = 'request';
    }

    public function accepted()
    {
        $this->fetch('ACCEPTED');
        $this->active = 'accepted';
    }

    public function ongoing()
    {
        $this->fetch('IN-PROGRESS');
        $this->active = 'ongoing';
    }

    public function completed()
    {
        $this->fetch('COMPLETED');
        $this->active = 'completed';
    }

    public function cancelled()
    {
        $this->fetch('ALL-CANCELLED');
        $this->active = 'cancelled';
    }
    
    private function fetch($status)
    {
        $endpoint = config('api.url').'user/book';

        try {
            $token = Cookie::get('_tk');
            
            # Validate login
            $response = Http::withToken($token)->get(config('api.url').'user/login/validate')->object();
            if(! $response->success) {
                Cookie::remove('_tk');
                return redirect()->route('client.login');
            }

            $response = Http::withToken($token)->get($endpoint, ['status' => $status, 'page' => $this->page])->object();

            $this->bookings = $response->data->results;
            $this->total_pages = (int)($response->data->total_results / 5 + 1);

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    
}
