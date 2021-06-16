<div class="flex flex-col justify-center items-center m-8">
<p class="mt-4 mb-5 max-w-2xl text-center">To see the form hiding until livewire finishes loading open developer tools | network and then set throttling to Fast3G.
The javascript that controls this hiding behaviour can be found in layouts/base.blade.php</p>
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
    <p class="mt-4 mb-5 max-w-2xl text-center"> This next area plays with wire:loading, wire:target.  You can target a wire:model bound element id or you target a php function.</p>
    <div>
            <button id="btn1" class="text-white bg-green-500 px-3 py-2" 
                wire:loading.remove wire:click="longFunctionCall()">Button one</button>
            <button id="btn2" class="text-white bg-blue-500 px-3 py-2" 
                wire:target="longFunctionCall2" wire:loading.remove wire:click="longFunctionCall2()">Button two</button><br>
           
            <div wire:target="longFunctionCall" wire:loading wire:loading.class="bg-green-300 p-1">Waiting for call to return ... </div>       
            <div wire:target="longFunctionCall2" wire:loading wire:loading.class="bg-blue-300 p-1">Waiting for call to return ... </div>    
            <div wire:target="longFunctionCall,longFunctionCall2" wire:loading.class="bg-gray-400"  >{{$status}}</div>
    </div>
    <p class="mt-4 mb-5 max-w-2xl text-center">
     This next area plays with wire:dirty</p>
     <div>
         <form class="flex flex-col justify-center items-center" >
        <input class="w-32" type="text" wire:model.lazy="dirtyProperty" wire:dirty.class="font-bold">
        <p wire:dirty wire:target="dirtyProperty">Value has been changed, once you move focus away, the value will update in php and no longer be dirty</p>
        </form>
        
        </div>
</div>

