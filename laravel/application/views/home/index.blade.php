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
				<li><a href="#" class="top_parent">{{ $input->Mens }}</a>
					<ul>
						<li><a href="#" class="parent">Item</a>
							<ul>
								<li><a href="#">Size</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div> 
	</div>
</body>
</html>
