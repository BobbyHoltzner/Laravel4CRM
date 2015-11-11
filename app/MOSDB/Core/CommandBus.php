<?php namespace MOSDB\Core;


use App;


trait CommandBus {


/**
 * Execute the command
 * @param  $command  
 * @return mixed 
 */

	public function execute($command)
	{
		return $this->getCommandBus()->execute($command);
	}


/**
 * Fetch the commandBus
 * @return mixed 
 */

	public function getCommandBus()
	{
		return App::make('Laracasts\Commander\CommandBus');
	}
}