<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Question;
use App\Reply;

class QuestionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	/*public function index()
	{
		$questions  = Question::with('answers')->get();
		return \View::make('questions.index', compact('questions'));
		//var_dump($questions->toArray());
	}*/

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($test_id, $id)
	{
		$question = Question::whereTestId($test_id)->with('answers')->find($id);
		$reply = new Reply;
				
		return \View::make('questions.show', compact('question', 'reply'));
	}

}
