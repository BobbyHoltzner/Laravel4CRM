<?php namespace MOSDB\Registration;

use Laracasts\Commander\CommandHandler;
use MOSDB\Users\UserRepository;
use MOSDB\Users\User;
use Laracasts\Commander\Events\DispatchableTrait;


class RegisterUserCommandHandler implements CommandHandler {

	use DispatchableTrait;

	protected $repository;

	function __construct(UserRepository $repository)
	{
		$this->repository = $repository;
	}
	
	/**
	 * Handle the Command
	 *
	 * @param  $command 
	 * @return mixed 
	 * 
	 */
	public function handle($command)
	{

		$user = User::register(
			$command->first_name, $command->last_name, $command->email, $command->password
		);	

		$this->repository->save($user);


		$this->dispatchEventsFor($user);



		return $user;
	}
}