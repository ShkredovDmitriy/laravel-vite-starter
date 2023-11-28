@vite(['resources/js/app.js'])

<?php
  $auth = false;
  $title = "Главная";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{$title}}</title>
	</head>
	<body>
	  @include('blocks.header.header')
		@include('blocks.footer.footer')
	</body>
</html>
