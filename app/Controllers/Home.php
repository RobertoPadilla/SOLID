<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['documentHeader'] = view('Components/documentHeader');
		$data['documentFooter'] = view('Components/documentFooter');
		$data['navBar'] = view('Components/navbar');
		$data['h1Home'] = lang('home.H1');
		return view('HomeView', $data);
	}

	//--------------------------------------------------------------------

}
