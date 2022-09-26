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

	public function messages()
	{
		return [
			'username.required'      => 'the_username_field_is_required',
			'username.min'           => 'the_username_must_be_at_least_3_characters',
			'username.exists'        => 'name_not_found',
			'password.required'      => 'the_password_field_is_required',
			'password.enum'          => 'password_not_found',
		];
	}
}