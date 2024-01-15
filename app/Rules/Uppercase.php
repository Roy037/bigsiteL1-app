<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
    }
    public function passes($attribute, $value)
    {
        return strtoupper($value) === $value;
    }
    public function message()
    {
        return 'the atttibuild  sdnsanajdnajd';
    }
}
git initgit init