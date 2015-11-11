<?php

use MOSDB\Forms\RegistrationForm;
use MOSDB\Registration\RegisterUserCommand;
use MOSDB\Core\CommandBus;



class RegistrationController extends \BaseController {


	use CommandBus;




	/**
	*	@var Registration Form
	*/
	private $registrationForm;

	function __construct(RegistrationForm $registrationForm)
	{
		$this->registrationForm = $registrationForm;

		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	/**
	*	Storing a new user
	*	@return string
	*/

	public function store()
	{

		$this->registrationForm->validate(Input::all());

		extract(Input::only('first_name', 'last_name', 'email', 'password'));

		

		$user = $this->execute(
			new RegisterUserCommand($first_name, $last_name, $email, $password)
		);

		Auth::login($user);

		Flash::message('User Created!');

		return Redirect::route('register')->with('flash_message', 'Welcome aboard!');

		/*return ('flash_message', 'User Created!');*/
	}

	public function index()
	{

		$users = User::all();
		return View::make('users.index')->withUsers($users);
	}

	public function edit($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.edit')->withUser($user);
	}

	public function update($id)
	{
		$user = User::find($id);
		
		$user ->first_name = Input::get('first_name');
		$user ->last_name = Input::get('last_name');
		$user ->email = Input::get('email');
		$user ->password = Input::get('password');
		
		$user ->save(); 



		Flash::message('User Updated!');
		return Redirect::route('users')->with('flash_message', 'User Updated');
	}

	public function destroy($id)
	{
		User::findOrFail($id)->delete();

		Flash::message('User Deleted!');
		return Redirect::route('users')->with('Flash_message', 'User Deleted');
	}
}











