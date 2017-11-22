@extends('layouts.app')

@section('content')
<div class="container">
{{ Form::open(array('url' => '/task','method' => 'post'))}}
<div class="form-group">
	<label for="task">Task Name:</label>
	<input name="name" type="text" class="form-control" id="task">
</div>
<div class="form-group">
	<label for="task_desc">Description:</label>
	<textarea rows="5" name="description" class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-primary">Save</button>
{{Form::close()}}
</div>
@endsection