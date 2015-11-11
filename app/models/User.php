<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent, Hash;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * Which fields may be mass assigned
	 *
	 * @var array
	 */

	protected $fillable = ['first_name','last_name', 'email', 'password'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function register($first_name, $last_name, $email, $password)
	{
		$user = new static(compact('first_name', 'last_name', 'email', 'password'));
	}


	/**
	 * Passwords must always be hashed
	 *
	 * 
	 * @param $password
	 **/

	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}

}
