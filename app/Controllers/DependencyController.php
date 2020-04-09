<?php namespace App\Controllers;

class DependencyController extends BaseController
{
	public function index()
	{
		$data['documentHeader'] = view('Components/documentHeader');
		$data['documentFooter'] = view('Components/documentFooter');
		$data['navBar'] = view('Components/navbar');
		foreach (lang('titles.navBarList') as $section => $longName) {
			if($section == get_first_segment())
			{
				$data['h1'] = $longName;
			break;
			}
		}
		return view('DependencyView', $data);
	}

	//--------------------------------------------------------------------

}
