@extends('layouts.master')
@section('content')
<div class="col-sm-8 col-sm-offset-2">
	@foreach ($errors->all('<li>:message</li>') as $error)
		{{$error}}
	@endforeach
	
	<div class="page-header">
		<h1>Create Account</h1>
	</div>	
	{{ Form::open(array('route'=>'users.store')) }}
		<div class="form_group">
		{{Form::label('Username')}}
		{{ Form::text('username', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form-group">
	    {{Form::label('Password')}}
	    {{Form::password('password', ['class' => 'form-control'])}}
	  </div>
	{{Form::submit('Submit', ['class' => 'btn btn-success'])}}
	{{Form::close()}}
</div>

@stop