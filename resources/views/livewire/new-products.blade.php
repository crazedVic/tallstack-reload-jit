<div>
    <div class="grid grid-cols-5 text-lg">
    <span class="p-3">DB Collection (db_products)
    @dump($db_products)</span>
    <span class="p-3">New Collection (new_products)
    @dump($new_products)</span>
    <span class="p-3">DB Eloquent Model (db_product)
    @dump($db_product)</span>
    <span class="p-3">New Eloquent Model (new_product)
    @dump($new_product)</span>
    <span class="p-3">Rules
    @dump($rules)</span>
    </div>
   <form class="flex flex-col justify-center items-center w-full bg-green-300">
       <span>

        <input wire:model="new_product.status" wire:change="changeInput" type="text" class="p-2 m-4 font-medium text-gray-700">
        <button class="btn bg-gray-400" wire:click.prevent="changeFieldNotInRules">Change NonRule Value</button>
        <button class="btn bg-gray-400" wire:click.prevent="changeFieldInRules">Change Rule Value</button>
       </span>
       <div class="p-3 border bg-white text-black m-3 w-80">
           {{$outcome}}
        </div>
    </form>
   <div class="p-3">Query Log (must enable \DB::enableQueryLog())
   @dump(\DB::getQueryLog())</span>
</div>
