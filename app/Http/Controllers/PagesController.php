<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{	
	public function __invoke() {
		return null !== request()->segment(1) ? view('pages.'.request()->segment(1)) : view('pages.home');
	}
}
