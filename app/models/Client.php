<?php

class Client extends \Eloquent {
	protected $table = 'clients';

	protected $fillable = array('company, street_address, city, state, zip, website, notes');


	public function projects()
	{
		return $this->hasMany('Project', 'client_id');
	}
}