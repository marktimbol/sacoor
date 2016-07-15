<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Quote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Displays all the latest quotes
     */
    public function index()
    {
    	$quotes = Quote::latest()->get();
    	return view('dashboard.quotes.index', compact('quotes'));
    }
}
