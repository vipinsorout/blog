@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="row">
						<div class="col-sm-8">
						                    You are logged in!
						</div>
						<div class="col-sm-2">
						<button type="button"  class="btn btn-info" onclick="window.location = '{{url("task/create")}}'">Add Task</button>
						</div>
						<div class="col-sm-2">
						<button type="button"  class="btn btn-info" onclick="window.location = '{{url("task")}}'">Show Task</button>
						</div>						
					</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
