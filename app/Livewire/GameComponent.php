<?php

namespace App\Livewire;

use App\Enums\PlayingCard;
use Livewire\Component;

class GameComponent extends Component
{
    public array $cards;
    public bool $selected = false;

    public function mount()
    {
        $this->shuffle();
        $this->cards = $this->cards;
    }

    public function render()
    {
        return view('livewire.game-component');
    }

    public function selectCard($key)
    {
        if ($this->selected) {
            return;
        }

        $this->selected = true;

        $this->cards[$key]['selected'] = true;
        if ($this->cards[$key]['card'] === PlayingCard::ACEOFSPADES()->value) {
            $this->js(<<<'JS'
                setTimeout(()=>{
                    winSound.play();
                }, 500);
                setTimeout(()=>{
                    jsConfetti.addConfetti();
                }, 1500);
            JS);
        }else{
            $this->js(<<<'JS'
                setTimeout(()=>{
                    loseSound.play();
                }, 700);
            JS);
        }

        $this->js(<<<'JS'
            setTimeout(()=>{$wire.deselectCard();}, 4000);
        JS);
    }

    public function deselectCard()
    {
        if (! $this->selected) {
            return;
        }

        foreach ($this->cards as $key => $card){
            if ($card['selected']) {
                $this->cards[$key]['selected'] = false;
            }
        }

        $this->js(<<<'JS'
            setTimeout(()=>{$wire.resetGame();}, 2000);
        JS);
    }

    public function resetGame()
    {
        $this->shuffle();
    }

    public function shuffle()
    {
        $selectedCards = [
            [
                'card' => PlayingCard::ACEOFSPADES()->value,
                'selected' => false,
            ]
        ];

        $bannedCards = [
            PlayingCard::ACEOFSPADES()->value,
            PlayingCard::ACEOFDIAMONDS()->value,
            PlayingCard::ACEOFHEARTS()->value,
            PlayingCard::ACEOFCLUBS()->value,
        ];

        $cards = PlayingCard::toValues();

        while (count($selectedCards) < 10) {
            $card = $cards[array_rand($cards)];
            if (!in_array($card, $bannedCards)) {
                $selectedCards[] = [
                    'card' => $card,
                    'selected' => false,
                ];
            }
        }

        shuffle($selectedCards);

        $this->cards = $selectedCards;
        $this->selected = false;
    }
}
