<div class="flex flex-col justify-center items-center m-8">
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
</div>

