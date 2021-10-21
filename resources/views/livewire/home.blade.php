<div class="p-20">
    <p class="w-full text-center mb-12">This is a collection of livewire pages demonstrating different features of
        livewire and alpinejs, and is also used to test for breaking changes in sdk updates.
    </p>
    <p class="mb-2">Here are the links and descriptions to the various pages:</p>
    <ul class="ml-6">
        <li class="mb-2"><a href="{{ route('emit-events') }}" class="underline text-blue-600">Emit-events</a><br />
            Emitting events to and from JS and livewire backend, testing to see what happens to data as it moves back
            and forth.  This does not deal with livewire events emitting to other livewire components.  its purely livewire<->javascript.
        </li>
        <li class="mb-2"><a href="{{ route('products') }}" class="underline text-blue-600">Products</a><br />
            This page tests how  how to maintain collection state using alpine entangle vs livewire public variables, and how those collections can be manipulated.
            This also shows how to keep all the alpine fun in a separate script block and how to use this, and how to use $watch.
        </li>
        <li class="mb-2"><a href="{{ route('products-lw') }}" class="underline text-blue-600">Products Livewire</a><br />
            Simplified list where you can toggle the state of each item in the list and then toggle the filter on the list.  Using  wire:click.prevent="filter()" to filter the list and then
            wire:click.prevent="toggle({ { $product } })" to toggle the item status.  These are both livewire events.
        </li>
        <li class="mb-2"><a href="{{ route('product-form') }}" class="underline text-blue-600">Products Form</a><br />
            Playing around with wire:loading functionality using wire:target.. having the ui update based on livewire activity that's going on.  Best served with the bandwidth throttled.
        </li>
        <li class="mb-2"><a href="{{ route('products-new') }}" class="underline text-blue-600">Products New</a><br />
            A deep dive into how the $rules stuff ties into simple and complex objects maintaining state over various ajax livewire calls.
        </li>
        <li class="mb-2"><a href="{{ route('type-ahead-combo') }}" class="underline text-blue-600">Type Ahead Combo</a><br />
            Created a simple look ahead auto complete dropwdown form control.
        </li>
        <li class="mb-2"><a href="{{ route('widget-event') }}" class="underline text-blue-600">Widget Events</a><br />
            So playing with multiple livewire components on a page that will refresh when a dialog box button is pressed,
            or dialog is closed.  Also play with sortByRaw, latest() and take() on the laravel querybuilder.
        </li>
    </ul>
</div>
