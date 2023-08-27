<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self ACEOFSPADES()
 * @method static self ACEOFHEARTS()
 * @method static self ACEOFDIAMONDS()
 * @method static self ACEOFCLUBS()
 * @method static self TWOOFSPADES()
 * @method static self TWOOFHEARTS()
 * @method static self TWOOFDIAMONDS()
 * @method static self TWOOFCLUBS()
 * @method static self THREEOFSPADES()
 * @method static self THREEOFHEARTS()
 * @method static self THREEOFDIAMONDS()
 * @method static self THREEOFCLUBS()
 * @method static self FOUROFSPADES()
 * @method static self FOUROFHEARTS()
 * @method static self FOUROFDIAMONDS()
 * @method static self FOUROFCLUBS()
 * @method static self FIVEOFSPADES()
 * @method static self FIVEOFHEARTS()
 * @method static self FIVEOFDIAMONDS()
 * @method static self FIVEOFCLUBS()
 * @method static self SIXOFSPADES()
 * @method static self SIXOFHEARTS()
 * @method static self SIXOFDIAMONDS()
 * @method static self SIXOFCLUBS()
 * @method static self SEVENOFSPADES()
 * @method static self SEVENOFHEARTS()
 * @method static self SEVENOFDIAMONDS()
 * @method static self SEVENOFCLUBS()
 * @method static self EIGHTOFSPADES()
 * @method static self EIGHTOFHEARTS()
 * @method static self EIGHTOFDIAMONDS()
 * @method static self EIGHTOFCLUBS()
 * @method static self NINEOFSPADES()
 * @method static self NINEOFHEARTS()
 * @method static self NINEOFDIAMONDS()
 * @method static self NINEOFCLUBS()
 * @method static self TENOFSPADES()
 * @method static self TENOFHEARTS()
 * @method static self TENOFDIAMONDS()
 * @method static self TENOFCLUBS()
 * @method static self JACKOFSPADES()
 * @method static self JACKOFHEARTS()
 * @method static self JACKOFDIAMONDS()
 * @method static self JACKOFCLUBS()
 * @method static self QUEENOFSPADES()
 * @method static self QUEENOFHEARTS()
 * @method static self QUEENOFDIAMONDS()
 * @method static self QUEENOFCLUBS()
 * @method static self KINGOFSPADES()
 * @method static self KINGOFHEARTS()
 * @method static self KINGOFDIAMONDS()
 * @method static self KINGOFCLUBS()
 * @method static self BLACKJOKER()
 * @method static self REDJOKER()
 */
final class PlayingCard extends Enum
{
    protected static function values(): array
    {
        return [
            'ACEOFSPADES' => 'ace_of_spades',
            'ACEOFHEARTS' => 'ace_of_hearts',
            'ACEOFDIAMONDS' => 'ace_of_diamonds',
            'ACEOFCLUBS' => 'ace_of_clubs',
            'TWOOFSPADES' => '2_of_spades',
            'TWOOFHEARTS' => '2_of_hearts',
            'TWOOFDIAMONDS' => '2_of_diamonds',
            'TWOOFCLUBS' => '2_of_clubs',
            'THREEOFSPADES' => '3_of_spades',
            'THREEOFHEARTS' => '3_of_hearts',
            'THREEOFDIAMONDS' => '3_of_diamonds',
            'THREEOFCLUBS' => '3_of_clubs',
            'FOUROFSPADES' => '4_of_spades',
            'FOUROFHEARTS' => '4_of_hearts',
            'FOUROFDIAMONDS' => '4_of_diamonds',
            'FOUROFCLUBS' => '4_of_clubs',
            'FIVEOFSPADES' => '5_of_spades',
            'FIVEOFHEARTS' => '5_of_hearts',
            'FIVEOFDIAMONDS' => '5_of_diamonds',
            'FIVEOFCLUBS' => '5_of_clubs',
            'SIXOFSPADES' => '6_of_spades',
            'SIXOFHEARTS' => '6_of_hearts',
            'SIXOFDIAMONDS' => '6_of_diamonds',
            'SIXOFCLUBS' => '6_of_clubs',
            'SEVENOFSPADES' => '7_of_spades',
            'SEVENOFHEARTS' => '7_of_hearts',
            'SEVENOFDIAMONDS' => '7_of_diamonds',
            'SEVENOFCLUBS' => '7_of_clubs',
            'EIGHTOFSPADES' => '8_of_spades',
            'EIGHTOFHEARTS' => '8_of_hearts',
            'EIGHTOFDIAMONDS' => '8_of_diamonds',
            'EIGHTOFCLUBS' => '8_of_clubs',
            'NINEOFSPADES' => '9_of_spades',
            'NINEOFHEARTS' => '9_of_hearts',
            'NINEOFDIAMONDS' => '9_of_diamonds',
            'NINEOFCLUBS' => '9_of_clubs',
            'TENOFSPADES' => '10_of_spades',
            'TENOFHEARTS' => '10_of_hearts',
            'TENOFDIAMONDS' => '10_of_diamonds',
            'TENOFCLUBS' => '10_of_clubs',
            'JACKOFSPADES' => 'jack_of_spades',
            'JACKOFHEARTS' => 'jack_of_hearts',
            'JACKOFDIAMONDS' => 'jack_of_diamonds',
            'JACKOFCLUBS' => 'jack_of_clubs',
            'QUEENOFSPADES' => 'queen_of_spades',
            'QUEENOFHEARTS' => 'queen_of_hearts',
            'QUEENOFDIAMONDS' => 'queen_of_diamonds',
            'QUEENOFCLUBS' => 'queen_of_clubs',
            'KINGOFSPADES' => 'king_of_spades',
            'KINGOFHEARTS' => 'king_of_hearts',
            'KINGOFDIAMONDS' => 'king_of_diamonds',
            'KINGOFCLUBS' => 'king_of_clubs',
            'BLACKJOKER' => 'black_joker',
            'REDJOKER' => 'red_joker',
        ];
    }

    protected static function labels(): array
    {
        return [
            'ACEOFSPADES' => 'Ace of Spades',
            'ACEOFHEARTS' => 'Ace of Hearts',
            'ACEOFDIAMONDS' => 'Ace of Diamonds',
            'ACEOFCLUBS' => 'Ace of Clubs',
            'TWOOFSPADES' => '2 of Spades',
            'TWOOFHEARTS' => '2 of Hearts',
            'TWOOFDIAMONDS' => '2 of Diamonds',
            'TWOOFCLUBS' => '2 of Clubs',
            'THREEOFSPADES' => '3 of Spades',
            'THREEOFHEARTS' => '3 of Hearts',
            'THREEOFDIAMONDS' => '3 of Diamonds',
            'THREEOFCLUBS' => '3 of Clubs',
            'FOUROFSPADES' => '4 of Spades',
            'FOUROFHEARTS' => '4 of Hearts',
            'FOUROFDIAMONDS' => '4 of Diamonds',
            'FOUROFCLUBS' => '4 of Clubs',
            'FIVEOFSPADES' => '5 of Spades',
            'FIVEOFHEARTS' => '5 of Hearts',
            'FIVEOFDIAMONDS' => '5 of Diamonds',
            'FIVEOFCLUBS' => '5 of Clubs',
            'SIXOFSPADES' => '6 of Spades',
            'SIXOFHEARTS' => '6 of Hearts',
            'SIXOFDIAMONDS' => '6 of Diamonds',
            'SIXOFCLUBS' => '6 of Clubs',
            'SEVENOFSPADES' => '7 of Spades',
            'SEVENOFHEARTS' => '7 of Hearts',
            'SEVENOFDIAMONDS' => '7 of Diamonds',
            'SEVENOFCLUBS' => '7 of Clubs',
            'EIGHTOFSPADES' => '8 of Spades',
            'EIGHTOFHEARTS' => '8 of Hearts',
            'EIGHTOFDIAMONDS' => '8 of Diamonds',
            'EIGHTOFCLUBS' => '8 of Clubs',
            'NINEOFSPADES' => '9 of Spades',
            'NINEOFHEARTS' => '9 of Hearts',
            'NINEOFDIAMONDS' => '9 of Diamonds',
            'NINEOFCLUBS' => '9 of Clubs',
            'TENOFSPADES' => '10 of Spades',
            'TENOFHEARTS' => '10 of Hearts',
            'TENOFDIAMONDS' => '10 of Diamonds',
            'TENOFCLUBS' => '10 of Clubs',
            'JACKOFSPADES' => 'Jack of Spades',
            'JACKOFHEARTS' => 'Jack of Hearts',
            'JACKOFDIAMONDS' => 'Jack of Diamonds',
            'JACKOFCLUBS' => 'Jack of Clubs',
            'QUEENOFSPADES' => 'Queen of Spades',
            'QUEENOFHEARTS' => 'Queen of Hearts',
            'QUEENOFDIAMONDS' => 'Queen of Diamonds',
            'QUEENOFCLUBS' => 'Queen of Clubs',
            'KINGOFSPADES' => 'King of Spades',
            'KINGOFHEARTS' => 'King of Hearts',
            'KINGOFDIAMONDS' => 'King of Diamonds',
            'KINGOFCLUBS' => 'King of Clubs',
            'BLACKJOKER' => 'Black Joker',
            'REDJOKER' => 'Red Joker',
        ];
    }
}
