<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	// public function authorize()
	// {
	//     return false;
	// }

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules(): array
	{
		return [
			'username'              => ['required', 'min:3', 'unique:users,username'],
			'email'                 => ['required', 'unique:users,email'],
			'password'              => ['required', 'confirmed', 'min:3'],
		];
	}

	public function messages()
	{
		return [
			'username.required'           => 'the_username_field_is_required',
			'username.min'                => 'the_username_must_be_at_least_3_characters',
			'username.unique'             => 'the_username_has_already_been_taken',
			'email.required'              => 'the_email_field_is_required',
			'email.unique'                => 'the_email_has_already_been_taken',
			'password.required'           => 'the_password_field_is_required',
			'password.min'                => 'the_password_must_be_at_least_3_characters',
			'password.confirmed'          => 'the_password_confirmation_does_not_match',
		];
	}
}