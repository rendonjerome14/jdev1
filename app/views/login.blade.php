<!doctype html>
<html>
<head>
	<title>Look at me Login</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class = "container">
	{{ Form::open(array('url' => 'login')) }}
		<h2>My blog</h2>
		<h3>Login</h3>

		<!-- if there are login errors, show them here -->
		<div class="form-group">
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'sample@email.com',
				'class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array('class' => 'form-control')) }}
		</div>
		{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
</div>
</body>
</html>