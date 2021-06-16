<div class="flex flex-col justify-center items-center m-8">
    <p>To see the form hiding until livewire finishes loading open developer tools | network and then set throttling to Fast3GH</p>
    <p>The javascript that controls this hiding behaviour can be found in layouts/base.blade.php</p>
    <form >
        <input class="w-32" type="text" wire:model="name">
    </form>
    <button class="btn" wire:click="$set('showform',true)" wire:click="fun()"> Show Dialog </button>
    @if($showform)
        <div class="fixed flex flex-col justify-between
                items-center shadow-md rounded-sm
                top-36 mx-auto z-40 border-2
                border-gray-500 bg-gray-400
                text-white pb-2 h-44 w-80">
            <div class="self-stretch border-b pb-1
                pt-1 px-2 border-black
                bg-gray-500 text-white">Dialog Title</div>
            <div>Welcome home, {{ $name }}.</div>
            <div class="self-stretch flex flex-row-reverse mx-2">
                <button class="btn px-5"
                wire:click="$set('showform',false)">Close</button>
            </div>
        </div>
    @endif
    <p> This next area plays with wire:loading</p>
    <div>
            <button class="text-white bg-black px-3 py-2" wire:loading.remove wire:click="longFunctionCall()">Trigger lengthy function</button>
            <div wire:loading class="bg-green-300 p-1">Waiting for call to return ... </div>
            <div wire:loading.class="bg-gray-400">{{$status}}</div>
    </div>
</div>

