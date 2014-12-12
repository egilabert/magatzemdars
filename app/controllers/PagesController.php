<?php


class PagesController extends \BaseController {

	/**
	 * Display the main resource
	 *
	 * @return Response
	 */
	public function index()
	{
		//$client->setDeveloperKey('AIzaSyCrfTq2KUDkmvFPxqCFnHkRSCkN-cHD5CQ');
		return View::make('main');
	}

	/**
	 * Display the contacte resource
	 *
	 * @return Response
	 */
	public function contact()
	{
		return View::make('contacte');
	}

	/**
	 * Display the empresa resource
	 *
	 * @return Response
	 */
	public function empresa()
	{
		return View::make('empresa');
	}

	/**
	 * Display the companyia resource.
	 *
	 * @return Response
	 */
	public function companyia()
	{
		return View::make('companyia.companyia');
	}

	/**
	 * Display the escola resource.
	 *
	 * @return Response
	 */
	public function escola()
	{
		return View::make('escola');
	}

	public function report()
	{
		return View::make('reports.financial');
	}

}