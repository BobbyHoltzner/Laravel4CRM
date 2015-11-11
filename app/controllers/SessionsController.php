<?php

use MOSDB\Forms\SignInForm;

class SessionsController extends \BaseController {

	private $signInForm;


	public function __construct(SignInForm $signInForm)
	{
		$this->signInForm = $signInForm;
		$this->beforeFilter('guest' , ['except'=>'destroy']);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.login');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Fetch the form input
		$formData = Input::only('email','password');

		//Validate the form
		$this->signInForm->validate($formData);

		//if is valid, then try to sign in
		if (Auth::attempt($formData))
		{
			Flash::message('Welcome Back!');
		return Redirect::route('home')->with('flash_message', 'Welcome aboard!');
		}
		else{
			return Redirect::route('login')->withErrors('Username and/or Password incorrect');
		}

	}

	public function destroy()
	{
		Auth::logout();

		Flash::message('You have now been logged out.');

		return Redirect::route('login');
	}


	}