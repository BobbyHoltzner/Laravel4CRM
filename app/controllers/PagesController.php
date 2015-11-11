<?php

class PagesController extends \BaseController {

	public function home()
	{
		return View::make('pages.home');
	}

	public function login()
	{
		return View::make('pages.login');
	}

	public function register()
	{
		return View::make('pages.register');
	}


}


