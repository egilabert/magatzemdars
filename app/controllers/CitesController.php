<?php

use Carbon\Carbon;

class CitesController extends \BaseController {

	/**
	 * Display a listing of cites
	 *
	 * @return Response
	 */
	public function index()
	{

		$date_of_today = Carbon::now();
		$begining_month = Carbon::now()->startOfMonth();
		$end_month = Carbon::now()->endOfMonth();

		if (Auth::guest())
		{

			$user = User::find(1);

			$cites = Cite::whereBetween('data_programada', array($begining_month, $end_month ))
					->where('user_id', '=', '1')
					->orderBy('data_programada', 'ASC')
					->get();


		}
		else
		{

			$user = Auth::user();

			$cites = Cite::whereBetween('data_programada', array($begining_month, $end_month ))
					->where('user_id', '=', $user->id)
					->orderBy('data_programada', 'ASC')
					->get();

		}


		switch ($date_of_today->month) {
		    case 1:
		        $month = 'Gener';
		        break;
		    case 2:
		        $month = 'Febrer';
		        break;
		    case 3:
		        $month = 'Març';
		        break;
		    case 4:
		        $month = 'Abril';
		        break;
		    case 5:
		        $month = 'Maig';
		        break;
		    case 6:
		        $month = 'Juny';
		        break;
		    case 7:
		        $month = 'Juliol';
		        break;
		    case 8:
		        $month = 'Agost';
		        break;
		    case 9:
		        $month = 'Septembre';
		        break;
		    case 10:
		        $month = 'Octubre';
		        break;
		    case 11:
		        $month = 'Novembre';
		        break;
		    case 12:
		        $month = 'Desembre';
		        break;

		}

		return View::make('cites.index', compact('cites', 'user', 'month'));
	}
	
	public function store()
	{

		$validator = Validator::make($data = Input::all(), Cite::$rules);
	
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		//dd($data['data_programada']);

		$cites = new Cite;
		$cites->data_programada = Carbon::parse($data['data_programada']);
		$cites->details = $data['details'];
		$cites->user_id = Auth::user()->id;
		$cites->save();

		Flash::success('La teva cita s\'ha creat correctament!');

		return Redirect::route('cites.index');
	}

	/**
	 * Display the specified cite.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cite = Cite::findOrFail($id);

		return View::make('cites.show', compact('cite'));
	}

	/**
	 * Show the form for editing the specified cite.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cite = Cite::find($id);

		return View::make('cites.edit', compact('cite'));
	}

	/**
	 * Update the specified cite in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cite = Cite::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Cite::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$cite->update($data);

		Flash::message('La teva cita s\'ha actualitzat correctament!');

		return Redirect::route('cites.index');
	}

	/**
	 * Remove the specified cite from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cite::destroy($id);

		Flash::danger('La teva cita s\'ha eliminat correctament!');

		return Redirect::route('cites.index');
	}

}
