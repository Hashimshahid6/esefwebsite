<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PlainText implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // This regex checks if the value contains only plain text (letters, numbers, spaces, punctuation)
        return preg_match('/^[\pL\pN\s.,!?;:()-]*$/u', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must contain only plain text.';
    }
}