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
				<li><a href="#" class="top_parent">{{ $gender }}</a>
					<ul>
						<li><a href="#" class="parent">{{ $style1 }}</a>
							<ul>
								@foreach($top1 as $top1)
									<li><a href="#">{{ $top1 }}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="#" class="parent">{{ $style2 }}</a>
							<ul>
								@foreach($top2 as $top2)
									<li><a href="#">{{ $top2 }}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="#" class="parent">{{ $style3 }}</a>
							<ul>
								@foreach($top3 as $top3)
									<li><a href="#">{{ $top3 }}</a></li>
								@endforeach
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div> 
	</div>
</body>
</html>
