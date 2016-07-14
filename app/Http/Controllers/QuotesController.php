<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Quote;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index()
    {
    	$quotes = Quote::latest()->get();
    	return view('dashboard.quotes.index', compact('quotes'));
    }

    public function show($quote)
    {
        return view('dashboard.quotes.show', compact('quote'));
    }

    public function create()
    {
    	return view('dashboard.quotes.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required'
    	]);

    	Quote::create($request->all());

        flash()->success('A new quote has been successfully saved.');
        return redirect()->route('dashboard.quotes.index');
    }

    public function edit($quote)
    {
        return view('dashboard.quotes.edit', compact('quote'));
    }

    public function update(Request $request, $quote)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $quote->update($request->all());
        flash()->success('A quote has been successfully updated.');
        return redirect()->route('dashboard.quotes.index');
    }

    public function destroy($quote)
    {
        $quote->delete();
        flash()->success('A quote has been successfully deleted.');
        return redirect()->route('dashboard.quotes.index');
    }
}
