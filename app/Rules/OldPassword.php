<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OldPassword implements Rule
{
	public function __construct()
	{
	}

	/**
	 * Determine if the validation rule passes.
	 *
	 * @param  string $attribute
	 * @param  mixed $value
	 * @return bool
	 */
	public function passes($attribute, $value)
	{
		$loggedAdmin = Auth::guard('admin')->user();

		if (!Hash::check($value, $loggedAdmin->password)) {
			return false;
		}
		return true;
	}

	/**
	 * Get the validation error message.
	 *
	 * @return string
	 */
	public function message()
	{
		return 'The :attribute does not match.';
	}
}
