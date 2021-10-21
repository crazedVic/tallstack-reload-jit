<span>
    @if($showModal)
        @livewire('widget.modal')
    @endif
<div class="m-1 flex flex-col">
    <div class="w-full text-right px-3"><a href="{{ route('home') }}">back to home</a></div>
    <div class="flex p-12 w-full">
        @livewire('widget.one')
        @livewire('widget.two')
        @livewire('widget.three')
    </div>
</div>
</span>
