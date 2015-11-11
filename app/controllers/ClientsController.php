<?php

class ClientsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = Client::orderBy('company')->get();
		
		return View::make('clients.index')->withClients($clients);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('clients.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$client = new Client;
		$client ->company = Input::get('company');
		$client ->street_address = Input::get('street_address');
		$client ->city = Input::get('city');
		$client ->state = Input::get('state');
		$client ->zip = Input::get('zip');
		$client ->website = Input::get('website');
		$client ->notes = Input::get('notes');
		$client->save(); 

		Flash::message('Client Added!');
		return Redirect::route('add_client')->with('flash_message', 'Client Added!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		$client = Client::findOrFail($id);

		/*return $client->projects;*/

		/*return $client->projects;*/
		

		return View::make('clients.show')->withClient($client);



	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = Client::findOrFail($id);
		return View::make('clients.edit')->withClient($client);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$client = Client::findOrFail($id);

		$client ->company = Input::get('company');
		$client ->street_address = Input::get('street_address');
		$client ->city = Input::get('city');
		$client ->state = Input::get('state');
		$client ->zip = Input::get('zip');
		$client ->website = Input::get('website');
		$client ->notes = Input::get('notes');
		$client->save(); 

		Flash::message('Client Updated!');
		return Redirect::route('clients')->with('flash_message', 'Client Updated');
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Client::findOrFail($id)->delete();

		Flash::message('Client Deleted!');
		return Redirect::route('clients')->with('Flash_message', 'Client Deleted');
	}

	public function printClient($id)
	{	
		$client = Client::findOrFail($id);
		
		$pdf = App::make('snappy.pdf.wrapper');
    	$html = <<<HTML
		  <html>
		      <head>
		      
		            <style type="text/css">
		            @font-face {
					  font-family: 'Neutra';
					  src: url('http://mosdb.bobbyholtzner.com/css/NeutraText-Bold.otf')  format('opentype'); /* Safari, Android, iOS */       
					}
					@font-face{
						font-family: 'NeutraText BookSC';
						src:url('http://mosdb.bobbyholtzner.com/css/NeutraText BookSC.otf') format('opentype');
					}
		            	p{
		            		font-size: 12px;
		            		font-family: NeutraText BookSC;
		            		
		            	}
		            	.bold{
		            		font-weight: 700;
		            		font-family: Neutra;
		            	}
		            	header{
		            		color:#ED1B35;
		            		font-weight: bold;
		            		margin-bottom: 25px;
		            		font-family: Neutra;
		            	}
		            </style>
		      </head>
      		  <body>
      <header>Projects for  $client->company <br /></header>
      
HTML;


foreach ($client->projects as $project)



    
    

      $html .= '
  

  <div class="playerPage">
                  
                  	  
                       <p><span class="bold">Project Service:</span> ' . $project->service . ' </p>
                       <p><span class="bold">Project Details:</span> ' . $project->details . '</p>
                       <p><span class="bold">Project Date:</span> ' . date("n/j/Y",strtotime ($project->date)) . '</p> 
                       <p><span class="bold">Project Amount:</span> ' . $project->amount . '</p>
                       <p><span class="bold">Contact Name:</span> ' . $project->contact_name . '</p> 
                       <p><span class="bold">Contact Email:</span> ' . $project->contact_email . '</p>
                       <p><span class="bold">Contact Phone:</span> ' . $project->contact_phone . '</p> 
                       <p><span class="bold">Project Notes: </span>' . $project->notes . '</p> <br /> 

                      
                   

                ';
   
    
    // return PDF::loadHTML($html)->download('selected.pdf');
    $pdf ->loadHTML($html);
    return $pdf->stream();
		
	
}

		public function csvClient($id)
		{
			/*$client = Client::find($id);
			return $client;*/

			$data = Client::find($id);

			Excel::create('New file', function($excel) use($data) {

    		$excel->sheet('New sheet', function($sheet) use($data) {

        	$sheet->loadView('clients.csv', array('data' => $data));

    		})->export('xls');

		});
		
		/*$client = Client::find($id);
		return $client;*/
		}

}
