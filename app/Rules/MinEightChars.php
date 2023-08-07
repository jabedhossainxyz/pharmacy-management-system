<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinEightChars implements Rule
{
    public function passes($attribute, $value)
    {
        return strlen($value) >= 6;
    }

    public function message()
    {
        return 'The :attribute must be at least 6 characters.';
    }
}
?>