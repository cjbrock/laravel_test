<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Radio Systems Code Exercise</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<div id="menu-bar-container">
		<div id="menu-bar">
			<ul>
				@foreach($genders as $gender)
				<li><a href="#" class="top_parent">{{ $gender['name'] }}</a>
				<ul>
					@foreach($gender['items'] as $item)
					<li><a href="#" class="parent">{{ $item['name'] }}</a>
						<ul>
							@foreach($item['sizes'] as $size)
								<li><a href="#">{{$size}}</a></li>
							@endforeach
						</ul>
					</li>
					@endforeach
				</ul>
				@endforeach
				</li>
			</ul>
		</div>  
	</div>
</body>
</html>
