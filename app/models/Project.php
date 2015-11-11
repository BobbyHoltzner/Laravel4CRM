<?php

class Project extends \Eloquent {
	protected $table = 'projects';

	protected $fillable = array('client_id, company, service, details, date, amount, contact_name, contact_email, contact_phone, notes');

	public function client()
	{
		return $this->belongsTo('Client');
	}
}