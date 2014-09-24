@extends('layouts.master')
@section('content')
<div class="page-header">
<div class="pull-right">
	<div class="btn-group">
		<a href="{{route('todo.create')}}" class="btn btn-default">Create Task</a>
    @if(Auth::check())
      {{Form::open(['route' => 'logout', 'method' => 'DELETE'])}}
      {{Form::submit('Logout')}}
      {{Form::close()}}
    @endif
	</div>
</div>
	<h2>show todos</h2>
<ul>
  @foreach ($todos as $todo)
    <li> {{ $todo->task}}
   {{Form::open(['route'=>['todo.destroy',$todo->id],'method'=>'DELETE'])}}
   {{Form::submit('x',['class' => 'btn btn-danger'])}}
   {{Form::close()}}
    </li>
  @endforeach
</ul>
@stop