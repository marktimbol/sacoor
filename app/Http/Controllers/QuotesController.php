<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Quote;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    /**
     * Displays all the latest quotes
     */
    public function index()
    {
    	$quotes = Quote::latest()->get();
    	return view('dashboard.quotes.index', compact('quotes'));
    }

    /**
     * View a single quote
     */
    public function show($quote)
    {
        return view('dashboard.quotes.show', compact('quote'));
    }

    /**
     * Show a form when adding a new quote
     */
    public function create()
    {
    	return view('dashboard.quotes.create');
    }

    /**
     * Store the new quote on the database
     */
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required'
    	]);

    	Quote::create($request->all());

        flash()->success('A new quote has been successfully saved.');
        return redirect()->route('dashboard.quotes.index');
    }

    /**
     * Shows an edit form
     */
    public function edit($quote)
    {
        return view('dashboard.quotes.edit', compact('quote'));
    }

    /**
     * Update the quote on the database
     */
    public function update(Request $request, $quote)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $quote->update($request->all());
        flash()->success('A quote has been successfully updated.');
        return redirect()->route('dashboard.quotes.index');
    }

    /**
     * Delete the quote on the database
     */
    public function destroy($quote)
    {
        $quote->delete();
        flash()->success('A quote has been successfully deleted.');
        return redirect()->route('dashboard.quotes.index');
    }
}
