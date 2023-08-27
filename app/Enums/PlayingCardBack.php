<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self ACEOFSPADES()
 * @method static self ACEOFHEARTS()
 */
final class PlayingCardBack extends Enum
{
    protected static function values(): array
    {
        return [
            'ACEOFSPADES' => 'ace_of_spades',
            'ACEOFHEARTS' => 'ace_of_hearts',
        ];
    }

    protected static function labels(): array
    {
        return [
            'ACEOFSPADES' => 'Ace of Spades',
            'ACEOFHEARTS' => 'Ace of Hearts',
        ];
    }
}
