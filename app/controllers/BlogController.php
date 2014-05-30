<?php

class BlogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			$blog = Blog::all();

			// load the view and pass the nerds
			//return View::make('blog.index')
			//	->with('blog', $blog);
			$x = Input::get('email');
			if(isset($x))
			{				
				$name = DB::table('users')->where('email','=', $x)->get(array('name'));
				$y = $name[0]->name;
			}
			else
			{
				$y = 'Guest';
			}
				return View::make('blog.index')->with(array('blog' => $blog, 'name' => $y)
		);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('blog.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'comment'    => 'required',
			'email'      => 'required|email'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('blog/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$blog = new Blog;
			$blog->name       = Input::get('name');
			$blog->email      = Input::get('email');
			$blog->comment = Input::get('comment');
			$blog->save();

			// redirect
			Session::flash('message', 'Comment Successfully Added');
			return Redirect::to('blog');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
		$blog = Blog::find($id);

		// show the view and pass the nerd to it
		return View::make('blog.show')
			->with('blog', $blog);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::find($id);

		// show the edit form and pass the nerd
		return View::make('blog.edit')
			->with('blog', $blog);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'comment' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('blog/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$blog = Blog::find($id);
			$blog->name       = Input::get('name');
			$blog->email      = Input::get('email');
			$blog->comment = Input::get('comment');
			$blog->save();

			// redirect
			Session::flash('message', 'Comment Successfully updated!');
			return Redirect::to('blog');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$blog = Blog::find($id);
		$blog->delete();

		// redirect
		Session::flash('message', 'Comment Successfully deleted!');
		return Redirect::to('blog');
	}
}
