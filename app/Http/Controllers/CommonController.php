<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommonController extends Controller
{
	/**
	 * Sets the language
	 */
	public function setLocale($lang)
	{
		if (in_array($lang, ['en', 'am'])) session()->put('lang', $lang);
		App::setLocale(session()->get('lang'));
		return back();
	}

	/*
	 *	sends an email
	 **/
	public function store()
	{
		$validator = Validator::make(request()->all(), [
			'to' => "required|email",
			'content' => 'required|string|max:65536',
			'subject' => 'required|string|max:255'
		]);
		if ($validator->fails()) {
			return redirect()->back()->with('errors', $validator->errors());
		}
		Mail::to(request()->post('to'))->send(new \App\Mail\MailTestMailable());
		return redirect()->back();
	}
}
