<div class="bg-gradient-to-r from-gray-100 via-gray-200 to-gray-400 flex flex-col w-full text-lg font-bold justify-center items-center min-h-screen" >
   <span x-data="{show: false, message: @entangle('message'), countClicks: @entangle('countClicks')}"
    class="flex flex-col w-full text-lg font-bold justify-center items-center">
        <span class="mb-3 font-light text-lg">{{$title}}</span>
        <input class="btn bg-green-700 text-white" type="button" value="Hello AlpineJS" @click="show = !show">
        <span x-show="show" class="mt-3 text-red-900">Hello back at you!</span>
        <span class="subtitle">Using Tailwind @apply in app.scss here</span>
        <input class="min-w-lg" type="text" x-model.debounce.500="message">
        <span class="my-2" x-text="message"></span>
        <hr />
        <span x-text="countClicks"></span>
        <input type="button" x-on:click="$wire.set('countClicks', countClicks+1)"
            value="Increment via AplineJS using $wire.set"
            class="btn">
        <input class="btn" type="button" x-on:click="countClicks++" value="Increment via AlpineJS">
    </span>
    <button class="btn" wire:click="incrementCounter">Increment via Liveware call to PHP function</button>
    <button class="btn" wire:click="$set('countClicks', {{$countClicks+1}})">Increment via Livewire $set()</button>
    <button class="btn" onclick="emitEventFromJS()">Increment via Javascript Function and Livewire.emit</button>
    <!-- still need to add Emit examples in all directions -->
</div>
<script>

    function emitEventFromJS(){
        Livewire.emit("incrementEvent")
    }
    </script>
