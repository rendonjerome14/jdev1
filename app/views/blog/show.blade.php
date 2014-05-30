<!-- app/views/nerds/show.blade.php -->

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

<h1>Showing {{ $blog->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $blog->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $blog->email }}<br>
			<strong>Comment:</strong> {{ $blog->comment }}
		</p>
	</div>

</div>
</body>
</html>