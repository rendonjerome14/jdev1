<!-- app/views/nerds/index.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('blog') }}">Welcome {{ $name }}!</a>
		<a class="navbar-brand" href="{{ URL::to('blog') }}">Simple Blog</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('blog') }}">View All Comments</a></li>
		<li><a href="{{ URL::to('blog/create') }}">Add Comments</a></li>
		<li><a href="{{ URL::to('login') }}">Logout</a></li>
	</ul>
</nav>

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<h1>My Blog</h1>
	<p class=pull-left>
			Each Six Sigma project carried out within an organization follows 
			a defined sequence of steps and has quantified value targets, for 
			example: reduce process cycle time and reduce pollution. Get 
			introduced to important Six Sigma concepts such as, Control Charts,
			Design of Experiments and Taguchi Methods. Managers can use six 
			sigma to identify and solve supply chain problems.
	</p>
	<p class=pull-left>
			Each Six Sigma project carried out within an organization follows 
			a defined seix Sigma concepts such as, Control Charts,
			Design of Experiments and Taguchi Methods. Managers can use six 
			sigma to identify and solve supply chain problems.
	</p>
	<p class=pull-left>
			Each Six Sigma project carried out within an organization follows 
			a defined sequence of steps and has quantified value targets, for 
			example: reduce process cycle time and reduce pollution. Get 
			introduced
	</p>
	<p class=pull-left>
			Each Six Sigma project carried out within an organization follows 
			a defined sequence of steps and has quantified value targets, for 
			example: reduce proix Sigma concepts such as, Control Charts,
			Design of Experiments and Taguchi Methods. Managers can use six 
			sigma to identify and solve supply chain problems.
	</p>
	<p class=pull-left>
			E concepts such as, Control Charts,
			Design of Experiments and Taguchi Methods. Managers can use six 
			sigma to identify and solve supply chain problems.
	</p>
	<p class=pull-left>
			Each Six Sigma project carried out within an organization follows 
			a defineTaguchi Methods. Managers can use si
	</p>
	<p class=pull-left>
			Each Six Sigma project carried out within an organization follows 
			a defined sequence of steps and has quantified value targets, for 
			example: reduc problems.
	</p>
	<p class=pull-left>
			Each Six Sigma project carried out within an organization follows 
			a defined sequence of steps and has quantified value targets, for 
			example: reduce process cycle time and reduce pollution. Get 
			introduced to important Six Sigma concepts such as, Control Charts,
			Design of Experiments and Taguchi Methods. Managers can use six 
			sigma to identify and solve supply chain problems.
	</p>

<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Comments</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($blog as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->name }}</td>
				<td>{{ $value->email }}</td>
				<td>{{ $value->comment }}</td>

				<!-- we will also add show, edit, and delete buttons -->
				<td>

					<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
					<!-- we will add this later since its a little more complicated than the other two buttons -->
					{{ Form::open(array('url' => 'blog/' . $value->id, 'class' => 'pull-left')) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete this Comment', array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}
					<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
					<a class="btn btn-small btn-success pull-left" href="{{ URL::to('blog/' . $value->id) }}">Show this Comment</a>

					<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
					<a class="btn btn-small btn-info" href="{{ URL::to('blog/' . $value->id . '/edit') }}">Edit this Comment</a>

				</td>
			</tr>
		@endforeach
		</tbody>
</table>
	<script src="js/jquery.js"></script>	
	
	<script>
		//$('article').append('Hello from Jerome') //append add below; prepend add on top; after after the tag
		(function(){

			$('html').addClass('js');
			var contactForm = {
				container: $('#contact'),
				
				config:{
					effect: 'slideToggle',
					speed: 300
				},

				init: function(config){
					$.extend(this.config, config);

					$('<button></button>', {
						text: 'Contact Me'
					})	
						.insertAfter('article:first')
						.on('click', this.show);
				},

				show: function(){
						var cf = contactForm,
							container = cf.container,
							config = cf.config;

						if (container.is(':hidden')){
							contactForm.close.call(container);
							container[config.effect](config.speed);
							//console.log('showing');
						}	
				},

				close: function(){ 
					var $this = $(this);

					if($this.find('span.close').length) return;

					$('<span class=close>X</span>')
						.prependTo(this)
						.on('click', function(){
							contactForm.container[contactForm.config.effect](contactForm.config.speed);
						})
				}
			};

			contactForm.init({
				effect: 'fadeToggle',
				speed: 300
			});
		})();
	</script>
</body>
</html>