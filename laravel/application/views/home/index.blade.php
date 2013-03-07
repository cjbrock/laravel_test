<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	<!-- {{ HTML::style('laravel/css/style.css') }} -->
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>Testing this out.</h1>
		</header>
			<ul>
      @foreach($genders as $gender)
				<li>{{ $gender['name'] }}</li>
					<ul>
						@foreach($gender['items'] as $item)
							<li>{{ $item['name'] }}
								<ul>
								@foreach($item['sizes'] as $size)
									<li>{{$size}}</li>
								@endforeach
								</ul>
							</li>
						@endforeach
					</ul>
				</li>
			@endforeach
	</div>
</body>
</html>
