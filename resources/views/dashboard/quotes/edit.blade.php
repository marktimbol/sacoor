@extends('layouts.dashboard')

@section('content')
	<h2 class="pageTitle">Edit Quote</h2>
	<form method="POST" action="{{ route('dashboard.quotes.update', $quote->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		 <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
			<label for="title" class="control-label">Quote</label>
			<input type="text" name="title" value="{{ $quote->title }}" class="form-control" />
			@if ($errors->has('title'))
			    <span class="help-block">
			        <strong>{{ $errors->first('title') }}</strong>
			    </span>
			@endif
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>	
@endsection