<div id="game-window" class="w-screen h-screen bg-green-800 p-10">
    <div class="flex flex-col items-center justify-center h-full">
        <div class="grid grid-cols-5 gap-6 w-full max-w-7xl">
            @foreach($cards as $key => $card)
                <div>
                    <div wire:click="selectCard({{$key}})" class="w-full relative top-0 left-0">
                        <img
                            class="relative top-0 left-0 w-auto h-full transition ease-in-out duration-500  {{ $card['selected'] ? '-scale-x-0' : 'delay-500' }}"
                            src="{{ asset('build/images/cards/backs/red2.svg') }}" alt="">
                        <img
                            class="absolute top-0 left-0 w-auto h-full transition ease-in-out duration-500  {{ $card['selected'] ? 'delay-500' : '-scale-x-0' }}"
                            src="{{ asset('build/images/cards/fronts/'.$card['card'].'.svg') }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
