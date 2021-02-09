<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}

	public function cari()
	{
		return view('home/cari');
	}
	public function detail()
	{
		return view('home/detail');
	}
}
