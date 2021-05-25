<div class="bg-gradient-to-r from-gray-100 via-gray-200 to-gray-400 flex flex-col w-full text-lg font-bold justify-center items-center min-h-screen" >
   <span id="alpine1" x-data="{show: false, message: @entangle('message'), countClicks: @entangle('countClicks')}"
        class="flex flex-col w-full text-lg font-bold justify-center items-center">
        <span class="mb-3 font-light text-lg testme">{{$title}}</span>
        <input class="btn bg-green-700 text-white" type="button" value="Hello AlpineJS" @click="show = !show">
        <span x-show="show" class="mt-3 text-red-900">Hello back at you!</span>
        <hr class=" w-1/2 mt-2 border-gray-500" />
        <span class="subtitle">Using Tailwind @apply in app.scss here</span>
        <hr class=" w-1/2 mb-3 border-gray-500" />
        <input class="min-w-lg" type="text" x-model.debounce.500="message">
        <span class="my-2" x-text="message"></span>
        <hr class=" w-1/2 my-2 border-gray-500" />
        <span x-text="countClicks"></span>
        <input type="button" x-on:click="$wire.set('countClicks', countClicks+1)"
            value="Increment via AplineJS using $wire.set"
            class="btn">
        <input class="btn" type="button" x-on:click="countClicks++" value="Increment via AlpineJS">
    </span>
    <input class="btn" type="button" wire:click="incrementCounter" value="Increment via Liveware call to PHP function">
    <input class="btn" type="button" wire:click="$set('countClicks', {{$countClicks+1}})" value="Increment via Livewire $set()">
    <input class="btn" type="button" onclick="emitEventFromJS()" value="Increment via Javascript Function and Livewire.emit">
    <input class="btn" type="button" wire:click="emitIncrementEventToJSWithParam" value="Increment via PHP function that emits event with params to Javascript">
    <input class="btn" type="button" wire:click="emitIncrementEventToJSNoParam" value="Increment via PHP function that emits event to Javascript">

</div>
<script>

    function emitEventFromJS(){
        Livewire.emit("incrementEvent")
    }

    window.addEventListener('incrementEventToJSWithParam', event => {
        document.getElementById('alpine1').__x.$data.countClicks = event.detail.newValue;
    });

    window.addEventListener('incrementEventToJSNoParam', event => {
        document.getElementById('alpine1').__x.$data.countClicks ++;
    });
    </script>
