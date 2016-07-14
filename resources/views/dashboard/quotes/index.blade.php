@extends('layouts.dashboard')

@section('content')
	@foreach( $quotes as $quote )
		<li>{{ $quote->title }}</li>
	@endforeach	
@endsection