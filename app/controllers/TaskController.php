<?php

class TaskController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$todos = Auth::user()->todos;
		return View::make('todo.index', compact('todos'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('todo.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = array('task' => Input::get('task'));
		$rules = Todo::$rules;
		$todo = new Todo($data);
		$validation = Validator::make($data, $rules);
		if($validation->passes())
		{
			// Save todo after validation passes
			$todo = Auth::user()->todos()->save($todo);
			// Redirect to listing of todos
			return Redirect::route('todo.index')->with('message', 'Task Created.');
		}

		// If validation fails redirect back with errors
		return Redirect::back()->withErrors($validation);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('todo.create')->withInput();

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$todo = Todo::find($id);
        $todo->delete();
        return Redirect::route('todo.index');
	}
}
