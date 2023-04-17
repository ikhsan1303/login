<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordComplexityRule implements Rule
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
        $hasLowercase = preg_match('/[a-z]/', $value);
        $hasUppercase = preg_match('/[A-Z]/', $value);
        $hasNumber = preg_match('/\d/', $value);
        $hasSymbol = preg_match('/[^a-zA-Z0-9]/', $value);

        return $hasLowercase && $hasUppercase && $hasNumber && $hasSymbol && strlen($value) >= 10;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Password harus mengandung kombinasi huruf kecil, huruf besar, angka, dan simbol, dengan panjang minimal 10 karakter.';
    }
}
