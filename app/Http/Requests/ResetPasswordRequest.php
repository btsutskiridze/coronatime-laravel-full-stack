<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
	public function rules()
	{
		return [
			'email' => 'required|exists:users,email',
		];
	}

	public function messages()
	{
		return [
			'email.required'     => 'the_email_field_is_required',
			'email.exists'       => 'email_not_found',
		];
	}
}