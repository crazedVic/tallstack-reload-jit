<div class="flex flex-col w-full text-lg font-bold justify-center items-center min-h-screen" x-data="{show: false}">
    <span>{{$message}}</span> 
    <input class="mt-5 py-2 px-5 shadow-md rounded-sm bg-green-700 text-white" type="button" value="Hello AlpineJS" @click="show = !show">
    <span x-show="show" class="mt-3 text-red-900">Hello back at you!</span>
</div>
