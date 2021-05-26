@props(['data'])

<div {{ $attributes }} wire:click="$set('showDialog', false)"
    class="fixed top-0 left-0 right-0 bg-opacity-25 bg-white min-h-screen flex justify-center items-center mx-auto">
    <div 
    class="flex flex-col justify-center items-center text-sm 
        bg-green-800 shadow-lg text-white
        cursor-pointer h-40 w-80 border-green-700 bg-opacity-100 space-y-4"
            onclick="event.stopPropagation()">
            <div>I am an anonymous blade component!</div>
        <div> Number of clicks: {{$this->countClicks}} </div>
        <div> Number of clicks: {{$data}} </div>
        <button class="btn bg-gray-800" wire:click="incrementCounter">Increment Counter</button>
    </div>
</div>
