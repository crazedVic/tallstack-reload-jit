<form wire:submit.prevent="save" x-data="{show: false}"
        class="mb-4 relative w-1/5 m-16 bg-blue-300 p-16">

    <div >

        <input wire:model="action" label="{{__('Action')}}"
            class="rounded-md border border-gray-200 px-3 py-1"
            x-on:blur="setTimeout(function() {
                show=false;
                    }, 200);"
            x-on:focus="show=true">

        <div class="z-50 w-80 absolute bg-gray-100 border border-gray-400" x-show="show">
            <ul class="list-group w-full">
                @forelse($actionChoices as $choice)
                    <li class="list-group-item list-group-item-action cursor-pointer" id="{{$loop->index}}">
                        <div x-on:click="show=false;$wire.chooseAction('{{$choice["id"]}}');console.log('{{$choice["name"]}}')"
                            class="w-full pl-3 hover:bg-gray-300">
                            {{$choice["name"]}}
                        </div>
                    </li>
                @empty
                    <li class="list-group-item list-group-item-action pl-3">No actions found...</li>
                @endforelse
            </ul>
        </div>

    </div>

</form>
