<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class MyTestType extends Enum
{
    const OptionOne =   'entry1';
    const OptionTwo =   'entry2';
    const OptionThree = 'entry3';
}
