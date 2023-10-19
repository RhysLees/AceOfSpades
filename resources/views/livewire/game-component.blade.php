<div id="game-window" class="w-screen h-screen bg-green-800 p-10">
    <button wire:click="toggleSound()" class="absolute bg-red-500 text-white text-lg px-4 py-2 rounded-md inline-flex justify-center items-center gap-4">Mute Sound <span class="text-sm">{{ $sound ? '(Unmuted)' : '(Muted)' }}</span></button>
    <div class="flex flex-col items-center justify-center h-full">
        <h1 class="text-white text-6xl mt-2 mb-4">AceOfSpades</h1>
        <p class="text-white text-2xl mt-2 mb-16">Try to find the ace of spades, after each selection the cards will be shuffled again!</p>

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
