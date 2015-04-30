<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
		return view('home');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('contact');
	}

	public function store(ContactFormRequest $request)
	{
		return \Redirect::route('contact')
      		->with('message', 'Thanks for contacting us!');	
	}

}
