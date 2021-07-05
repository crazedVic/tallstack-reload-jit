<div class="bg-gradient-to-r from-gray-100 via-gray-200 to-gray-400 flex flex-col w-full text-lg font-bold justify-between items-center min-h-screen pt-8">
<div class="w-full text-right flex justify-end space-x-3 px-6 font-normal text-blue-500 underline mb-6">
        <a href="{{ route('home') }}">Back to home</a>
        <a href="{{ route('products') }}">Fun with Alpine/Livewire</a>
    </div>
    <span>

    <div><button class="btn" wire:click.prevent="filter()">@if($mode=="active") Show Inactive @else  Show Active @endif</button></div>
    @foreach($products as $product)
        <div>{{$product->name}} has status of {{$product->status}} 
        <button class="btn" wire:click.prevent="toggle({{$product}})">Toggle</button></div>
    @endforeach
    </span>
  
   <span>&nbsp;</span>
</div>
