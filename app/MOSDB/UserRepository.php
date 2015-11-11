<?php namespace MOSDB\Users;


/**
 * Persist a User
 * @param User $user 
 * @return mixed 
 */

class UserRepository {

	public function save(User $user)
	{
		return $user->save();
	}
}