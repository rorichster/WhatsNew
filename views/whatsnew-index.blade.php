@extends('whatsnew::layout')

@section('title', trans('whatsnew::messages.whatsnew'))

@section('content')

<h1>
	{!! trans('whatsnew::messages.list_whatsnew') !!}
	<small><a href="{!! route('whatsnew.create') !!}">{!! trans('whatsnew::messages.add_whatsnew') !!}</a></small>
</h1>
<div class="col-md-8">
	<ul class="list-group">
		@foreach($whatsnew as $what)
			<li>
				{!! $what->version !!}: {!! $what->description !!}
			</li>
		@endforeach
	</ul>
</div>

@endsection