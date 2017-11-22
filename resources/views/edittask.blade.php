@extends('layouts.app');

@section('content')
<div class="container">
	{{Form::open(['url' => '/task/'.$task->id,'method' => 'PUT'])}}
	<div class="form-group">
		<label for="task">Task Name</label>
		<input name="name" type="text" class="form-control" id="task" value="{{$task->name}}">
	</div>
	<div class="form-group">
		<label for="desc">Description</label>
		<textarea name="description" rows="5" class="form-control" value="{{$task->description}}">{{$task->description}}</textarea>
	</div>
	<button type="submit" class="btn btn-primary">Save</button>
	{{Form::close()}}
</div>
@endsection