@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-11">
    		<h2><b>All Tasks are listed here</b></h2>
    	</div>
    	<div class="col-md-1">
    		<button type="button" class="btn btn-primary"  onclick="window.location = '{{url("task/create")}}'">Add Task</button>
    	</div>
    </div>
@foreach($tasks as $task)
	<div class="row">
		<div class="col-md-4">
		{{$task->name}}
		</div>
		<div class="col-md-6">
		{{$task->description}}
		</div>
		<div class="col-md-1"><button type="button" class="btn btn-primary" onclick="window.location = '{{url("task/$task->id/edit")}}'">Edit</button></div>
		<div class="col-md-1">{{Form::open(['url' => '/task/'.$task->id,'method' => 'DELETE'])}}<button type="submit" class="btn btn-danger">Delete</button>{{Form::close()}}</div>
	</div>
@endforeach

</div>
@endsection