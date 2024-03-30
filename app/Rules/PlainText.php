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
        // Strip HTML and PHP tags from the input
        $sanitizedValue = strip_tags($value);

        // This regex checks if the sanitized value contains only plain text (letters, numbers, spaces, punctuation), excluding the "&" character
        return preg_match('/^[\pL\pN\s.&,!?;:()-]*$/u', $sanitizedValue);
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
