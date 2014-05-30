<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Blog Site</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('blog') }}">Simple Blog</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('blog') }}">View All Comments</a></li>
		<li><a href="{{ URL::to('blog/create') }}">Add Comments</a>
	</ul>
</nav>

<h1>Comments</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'blog')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('comment', 'Comment') }}
		{{ Form::textarea('comment', Input::old('comment'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Add Comment', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>