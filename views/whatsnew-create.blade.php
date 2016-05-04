@extends('whatsnew::layout');

@section('title', trans('whatsnew.whatsnew'))

@section('content')

<form action="{!! route('whatsnew.store') !!}" method="POST" class="form-horizontal">

<div class="form-group">
	<label for="version" class="control-label">Version:</label>
	<input type="text" name="version" id="version" class="form-control" >
</div>
<div class="form-group">
	<label for="description" class="control-label">Description</label>
		<textarea name="description" id="description" class="form-control"></textarea>
</div>
	<input type="submit" value="Save" class="btn btn-primary">
</div>
</form>

@endsection