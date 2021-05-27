<div class="bg-gradient-to-r from-gray-100 via-gray-200 to-gray-400 flex flex-col w-full text-lg font-bold justify-between items-center min-h-screen">
    <div class="w-full text-right px-6 font-normal text-blue-500 underline"><a href="{{ route('home') }}">Back to home</a>
    </div>

    <span id="alpine1" x-data="page()" x-init="init()"
        class="flex flex-col w-full text-sm d justify-center items-center">
        <div>This uses an associative array of products where the key is the product id, here changes not reflected in js or livewire</div>
        <template x-for="[key, product] in Object.entries(assoc_products)" :key="key">
            <div class="flex space-x-2 items-baseline">
                <span x-text="key"></span>
                <input type="text" x-model="product.name">
                <input type="text" x-model="product.price">
                <button class="btn" @click="$wire.deleteProductById(key)">Delete using Unset</button>
            </div>
        </template>
        <hr class="my-5 text-blue-500" />
        <div>This uses a simple array of products with no key, so deleting is harder, and though changes reflected in js, not in livewire</div>
        <template x-for="product,index in simple_products" :key="index">
            <div class="flex space-x-2 items-baseline">
                <span x-text="product.id"></span>
                <input type="text" x-model="product.name">
                <input type="text" x-model="product.price">
                <button class="btn" @click="$wire.deleteProductByObject(product)">Delete using id</button>
                <button class="btn" @click="$wire.deleteProductByIndex(index)">Delete using index</button>
            </div>
        </template>
        
        <button class="btn" @click="$wire.showStateArray(assoc_products, simple_products)">Show Array States</button>
        <hr class="my-5 text-blue-500" />
        <div>This uses an entangled object</div>
        <div>
                <span x-text="currentProduct.id"></span>
                <input type="text" name="name" x-model="currentProduct.name">
                <input type="text" x-model="currentProduct.price">
                <button class="btn" @click="$wire.showProduct(currentProduct)">Show State</button>
        </div>
        
        <hr class="my-5 text-blue-500" />
        <div>This uses an entangled string</div>
        <div>
            <input type="text" name="name" x-model.debounce.500="prodName">
            <button class="btn" @click="$wire.showProductName(prodName)">Show State</button>
        </div>
        <hr class="my-5 text-blue-500" />
        <div>This calls a javascript function defined in x-data, which displays x-data variable in alert</div>
        <div>
            
            <button class="btn" @click="fetchData()">Run Function</button>
        </div>
        <script>
            function page() {
                return {
                    assoc_products: @entangle('products'), 
                    simple_products: @entangle('array_products'), 
                    currentProduct: @entangle('currentProduct'),
                    prodName: @entangle('prodName'),
                    fetchData() {
                        alert("Product Name: " + this.prodName);
                    },
                    init() {
                        let {name,price} = this.currentProduct;
                        this.$watch('currentProduct.name', (val) => console.log(val));
                    }
                }
            }

         </script>
    </span>

    <span>&nbsp;</span>
</div