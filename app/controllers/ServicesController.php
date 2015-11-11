<?php

class ServicesController extends \BaseController {




	/**
	 * Display a listing of the resource.
	 * GET /services
	 *
	 * @return Response
	 */
	public function index()
	{
		$services = Service::orderBy('service')->get();
		
		return View::make('services.index')->withServices($services);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /services/create
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('services.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /services
	 *
	 * @return Response
	 */
	public function store()
	{
		$service = new Service;
		$service ->service = Input::get('service');
		$service->save(); 

		Flash::message('Service Added!');
		return Redirect::route('add_service');
	}

	/**
	 * Display the specified resource.
	 * GET /services/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /services/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$service = Service::findOrFail($id);
		return View::make('services.edit')->withService($service);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /services/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$service = Service::findOrFail($id);
		$service ->service = Input::get('service');
		$service->save(); 

		Flash::message('Service Updated!');
		return Redirect::route('services')->with('flash_message', 'Service Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /services/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Service::findOrFail($id)->delete();

		Flash::message('Service Deleted!');
		return Redirect::route('services')->with('Flash_message', 'Service Deleted');
	}

}