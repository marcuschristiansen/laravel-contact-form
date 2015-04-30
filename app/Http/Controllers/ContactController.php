<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller {

	public function create() {

		return view('about.contact');

	}

	public function store(ContactFormRequest $request) {

		\Mail::send('emails.contact',
			array(
					'name' => $request->get('name'),
					'email' => $request->get('email'),
					'user_message' => $request->get('message')
				), function($message)
			{
				$message->from('christiansen.marcus@gmail.com');
				$message->to('christiansen.marcus@gmail.com', 'Admin')->subject('Contact Email');
			});

		return \Redirect::route('contact')
			->with('message', 'Thanks for contacting us!');

	}

}
