<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();
		
		return View::make('projects.index')->withProjects($projects);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$services = Service::all();
		$clients = Client::all();
		return View::make('projects.create')->withServices($services)->withClients($clients);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$project = new Project;
		$project ->client_id = Input::get('client_id');
		$project ->company = Input::get('company');
		$project ->service = Input::get('service');
		$project ->details = Input::get('details');
		$project ->date = Input::get('date');
		$project ->amount = Input::get('amount');
		$project ->contact_name = Input::get('contact_name');
		$project ->contact_email = Input::get('contact_email');
		$project ->contact_phone = Input::get('contact_phone');
		$project ->notes = Input::get('notes');
		$project->save(); 

		Flash::message('Project Added!');
		return Redirect::route('add_project')->with('flash_message', 'Project Added!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$projects = json_encode(DB::table('projects')->get());
		return View::make('json.projects')->withProjects($projects);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::find($id);
		$services = Service::all();
		$clients = Client::all();
		

		


		return View::make('projects.edit')->withProject($project)->withService($services)->withClients($clients);
		/*return $clients;*/

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$project = Project::find($id);

		
		$project ->client_id = Input::get('client_id');
		$project ->company = Input::get('company');
		$project ->service = Input::get('service');
		$project ->details = Input::get('details');
		$project ->date = Input::get('date');
		$project ->amount = Input::get('amount');
		$project ->contact_name = Input::get('contact_name');
		$project ->contact_email = Input::get('contact_email');
		$project ->contact_phone = Input::get('contact_phone');
		$project ->notes = Input::get('notes');

		$project ->save(); 



		Flash::message('Project Updated!');
		return Redirect::route('projects')->with('flash_message', 'Project Updated');
		
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Project::findOrFail($id)->delete();

		Flash::message('Project Deleted!');
		return Redirect::route('projects')->with('Flash_message', 'Project Deleted');
	}


}
