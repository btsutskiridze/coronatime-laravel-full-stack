<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules(): array
	{
		return [
			'username' => [
				'required',
				'min:3',
				filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'exists:users,email' : 'exists:users,username',
			],
			'password' => ['required'],
		];
	}

	public function attributes(): array
	{
		return[
			'username'=> 'username or email',
		];
	}
}