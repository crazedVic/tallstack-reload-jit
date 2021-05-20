<div class="bg-gradient-to-r from-gray-100 via-gray-200 to-gray-400 flex flex-col w-full text-lg font-bold justify-center items-center min-h-screen" >
   <span x-data="{show: false, message: @entangle('message'), countClicks: @entangle('countClicks')}"
    class="flex flex-col w-full text-lg font-bold justify-center items-center">
        <span>{{$message}}</span> 
        <input class="mt-5 py-2 px-5 shadow-md rounded-sm bg-green-700 text-white" type="button" value="Hello AlpineJS" @click="show = !show">
        <span x-show="show" class="mt-3 text-red-900">Hello back at you!</span>
        <span class="subtitle">Using Tailwind @apply in app.scss here</span>
        <input class="min-w-lg" type="text" x-model.debounce.500="message">
        <input type="button" x-on:click="$wire.set('countClicks', countClicks+1)" value="Increment via AplineJS using $wire.set">
        <input type="button" x-on:click="countClicks++" value="Increment via AplineJS">
        <span x-text="countClicks"></span>
        <span x-text="message"></span>
    </span>
    <button wire:click="incrementCounter">Increment via PHP function</button>
    <button wire:click="$set('countClicks', {{$countClicks+1}})">Increment via livewire $set</button>
    <!-- still need to add Emit examples in all directions -->
</div>
