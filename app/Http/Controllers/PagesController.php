<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Quote;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$quotes = Quote::latest()->get();
    	return view('pages.home', compact('quotes'));
    }
}
