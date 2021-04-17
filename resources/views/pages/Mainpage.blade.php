<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title')
	</title>
</head>
<body>
<div class="listAndCard">
	@yield('linksOfContent')
	@include('blocks.card')
</div>
</body>
</html>
