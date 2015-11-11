<?php namespace MOSDB\Forms;

use Laracasts\Validation\FormValidator;


class AddService extends FormValidator{


	protected $rules = [
	'service'=>'required'
	];
}