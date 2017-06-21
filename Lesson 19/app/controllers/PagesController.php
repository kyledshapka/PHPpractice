<?php

namespace App\Controllers;

class PagesController
{
	public function home()
	{
		return view( 'index' );
	}

	public function about()
	{
		$company = 'The Crimson Corporation';
		return view( 'about', [ 'company => $company' ]);
	}

	public function contact()
	{
		$email = 'crimsoncorp@druuge.net';
		return view( 'contact', [ 'email => $email' ]);
	}
}