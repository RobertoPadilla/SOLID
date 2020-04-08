<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['navBar'] = view('Components/navbar');
		return view('HomeView', $data);
	}

	//--------------------------------------------------------------------

}
