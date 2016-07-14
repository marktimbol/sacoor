@extends('layouts.dashboard')

@section('content')
	<h2 class="pageTitle">Create Quote</h2>
	<form method="POST" action="{{ route('dashboard.quotes.store') }}">
		{!! csrf_field() !!}
		 <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
			<label for="title" class="control-label">Quote</label>
			<input type="text" name="title" value="{{ old('title') }}" class="form-control" />
			@if ($errors->has('title'))
			    <span class="help-block">
			        <strong>{{ $errors->first('title') }}</strong>
			    </span>
			@endif
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-save"></i> Save
			</button>
		</div>
	</form>	
@endsection