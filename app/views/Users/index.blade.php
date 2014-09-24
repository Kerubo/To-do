@extends('layouts.master')
@section('content')
<div class="btn-group">
	<a href="{{route('users.create')}}" class="btn btn-success">Register</a>
	</div>
	<div class="btn-group">
		 <a href="{{route('users.login')}}" class="btn btn-success">Login</a> 
		</div>
@stop
