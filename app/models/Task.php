<?php
/*we rae going to add a new task table*/

class Todo extends Eloquent{


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $fillable = ['task'];
	
	protected $table = 'todo';

	public static $rules = array(
		'task'  => 'required|min:6',
		
	);
   

   // A todo belongs to a user
	public function users()
	{
		return $this->belongsToMany('user');
	}

}
