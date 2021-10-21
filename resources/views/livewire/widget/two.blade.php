<div class="border border-gray-500 rounded shadow-lg w-1/3 m-1">
    <div class="w-full bg-blue-900 text-white p-1">Two</div>
    <div class="w-full h-96 pl-4 mt-3 text-sm">
        @foreach($products as $product)
            {{ $product->name }}<br>
        @endforeach
    </div>
 </div>
