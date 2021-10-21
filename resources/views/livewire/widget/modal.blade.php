<div class="fixed top-0 left-0 right-0 bottom-0 flex flex-col justify-center items-center bg-black bg-opacity-40">
    <div class="border border-gray-500 mb-28 rounded-lg shadow-lg bg-white bg-opacity-100" style="width:500px; height:450px;">
        <div class="w-full bg-blue-900 text-white p-1">Modal Window
            <button class="float-right cursor-pointer pr-2" wire:click.prevent="cancel()">X</button></div>
        <div class="w-full h-full flex flex-col justify-end items-end pb-10 pr-2">
            <button class="btn bg-yellow-800 text-white" wire:click.prevent="save()">Save</button>
        </div>
    </div>
</div>
