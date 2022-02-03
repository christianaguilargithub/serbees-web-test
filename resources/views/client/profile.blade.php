@section('styles')
<style>
    a, a:hover {
        text-decoration:none;
        font-weight: 400;
    }

    a:hover {
        filter: brightness(97%);
    }

    a:active {
        filter: brightness(94%)
    }
</style>
@endsection

<x-client-layout>
    <div class="wrapper py-10 px-2">
        <div class="w-full flex flex-col md:flex-row rounded shadow overflow-hidden">
            <div class="p-10 bg-white">
                <img 
                    class="rounded-full w-32 h-32 mx-auto object-cover object-center border-4 border-serbees-yellow" 
                    src="{{ asset('images/squid.jpg') }}" 
                    alt="">

                <div class="flex gap-2 items-center mt-4">
                    <i class="far fa-user text-gray-600"></i>
                    <p class="font-bold text-gray-600">
                        {{ ucfirst($user->profile->first_name) }} {{ ucfirst($user->profile->last_name) }}
                    </p>
                </div>

                <div class="flex gap-2 items-center">
                    <i class="far fa-envelope text-gray-600"></i>
                    <p class="text-gray-600">
                        {{ $user->email }}
                    </p>
                </div>

                <div class="flex gap-2 items-center">
                    <i class="fa fa-venus-mars text-gray-600"></i>
                    <p class="text-gray-600">
                        {{ ($user->profile->gender == 1) ? 'Male' : 'Female' }}
                    </p>
                </div>
                <div class="flex gap-2 items-center">
                    <i class="far fa-calendar text-gray-600"></i>
                    <p class="text-gray-600">
                        {{ date('F m, Y', strtotime($user->profile->birth_date)) }}
                    </p>
                </div>

                <a 
                    href="#" 
                    class="inline-block w-full bg-serbees-yellow rounded-sm text-center py-2 text-white mt-4">
                    Edit Profile
                </a>
            </div>
            <livewire:client.bookings/>
        </div>
    </div>
</x-client-layout>