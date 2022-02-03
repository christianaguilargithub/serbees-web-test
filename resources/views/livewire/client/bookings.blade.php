<div class="w-full">
    <div class="w-full flex gap-2 justify-between h-auto bg-white relative">
        <p wire:click="all" class="w-full text-center px-4 py-1 rounded-br-2xl rounded-tr-2xl cursor-pointer @if($active == 'all') bg-serbees-blue text-white @endif">All</p>
        <p wire:click="request" class="w-full text-center px-4 py-1 rounded-2xl cursor-pointer  @if($active == 'request') bg-serbees-blue text-white @endif">Request</p>
        <p wire:click="accepted" class="w-full text-center px-4 py-1 rounded-2xl cursor-pointer  @if($active == 'accepted') bg-serbees-blue text-white @endif">Accepted</p>
        <p wire:click="ongoing" class="w-full text-center px-4 py-1 rounded-2xl cursor-pointer  @if($active == 'ongoing') bg-serbees-blue text-white @endif">Ongoing</p>
        <p wire:click="completed" class="w-full text-center px-4 py-1 rounded-2xl cursor-pointer  @if($active == 'completed') bg-serbees-blue text-white @endif">Completed</p>
        <p wire:click="cancelled" class="w-full text-center px-4 py-1 rounded-bl-2xl rounded-tl-2xl cursor-pointer  @if($active == 'cancelled') bg-serbees-blue text-white @endif">Cancelled</p>
    </div>

    <div class="w-full pl-2 pr-4 py-2 flex flex-col gap-2">
        @if(count($bookings))
            @foreach ($bookings as $booking)
                {{-- {{ dd($booking->service->name) }} --}}
                <div class="w-full bg-white p-2 rounded">
                    <small>Booking No: {{ str_pad($booking->id, (11 - strlen($booking->id)), '0', STR_PAD_LEFT) }}</small>
                    <p class="font-medium text-gray-600">{{ $booking->service->name }}</p>
                </div>
            @endforeach
        @endif
    </div>
</div>
