<?php namespace MOSDB\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator{
	/**
	*	Validation Rules for registration form
	*	@var array
	*
	*/

	protected $rules = [
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required|email|unique:users',
		'password'=>'required'

	];
}
?>