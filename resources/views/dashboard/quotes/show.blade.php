@extends('layouts.dashboard')

@section('content')
	<h2 class="pageTitle">{{ $quote->title }}</h2>
	<br />
	<form method="POST" action="{{ route('dashboard.quotes.destroy', $quote->id) }}">
		{!! csrf_field() !!}
		{!! method_field('DELETE') !!}
		<div class="form-group">
			<button type="submit" class="btn btn-danger">
				<i class="fa fa-trash"></i> Delete
			</button>
		</div>
	</form>	
@endsection