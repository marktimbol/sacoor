@extends('layouts.dashboard')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h2 class="pageTitle">Manage Quotes</h2>
		</div>

		<div class="col-md-4">
			<p class="pull-right">
				<a href="{{ route('dashboard.quotes.create') }}" class="btn btn-primary">
					<i class="fa fa-plus"></i> New Quote
				</a>
			</p>
		</div>
	</div>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Quotes</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $quotes as $quote )
			<tr>
				<td><a href="{{ route('dashboard.quotes.show', $quote->id) }}">{{ $quote->title }}</a></td>
				<td>
					<div class="btn-group" role="group" aria-label="...">
						<a href="{{ route('dashboard.quotes.edit', $quote->id) }}" class="btn btn-link">
							<i class="fa fa-pencil"></i>
						</a>
					</div>
				</td>
			</tr>	
			@endforeach
		</tbody>
	</table>
@endsection