<div class="bg-gradient-to-r from-gray-100 via-gray-200 to-gray-400 flex flex-col w-full text-lg font-bold justify-between items-center min-h-screen">
    <div class="w-full text-right px-6 font-normal text-blue-500 underline"><a href="{{ route('home') }}">Back to home</a>
    </div>

    <span id="alpine1" x-data="{
        products: @entangle('products'), 
        array_products: @entangle('array_products'), 
        currentProduct: @entangle('currentProduct'),
        prodName: @entangle('prodName'),
        }" 
        class="flex flex-col w-full text-sm d justify-center items-center">
        <div>This uses an associative array of products where the key is the product id</div>
        <template x-for="[key, product] in Object.entries(products)" :key="key">
            <div class="flex space-x-2 items-baseline">
                <span x-text="key"></span>
                <input type="text" x-model="product.name">
                <input type="text" x-model="product.price">
                <button class="btn" @click="$wire.deleteProductById(key)">Delete using Unset</button>
            </div>
        </template>
        <hr class="my-5 text-blue-500" />
        <div>This uses a simple array of products with no key, so deleting is harder</div>
        <template x-for="product,index in array_products" :key="index">
            <div class="flex space-x-2 items-baseline">
                <span x-text="product.id"></span>
                <input type="text" x-model="product.name">
                <input type="text" x-model="product.price">
                <button class="btn" @click="$wire.deleteProductByObject(product)">Delete using search</button>
            </div>
        </template>
        <hr class="my-5 text-blue-500" />
        <div>
                <span x-text="currentProduct.id"></span>
                <input type="text" name="name" x-model="currentProduct.name">
                <input type="text" x-model="currentProduct.price">
                <button @click="$wire.showProduct(currentProduct, prodName)">Show State</button>
        </div>
        <button class="btn" @click="$wire.save(products)">save Changes</button>
        <input type="text" name="name" x-model="prodName">
    </span>

    <span>&nbsp;</span>
</div