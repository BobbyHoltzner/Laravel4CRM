<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

		
		@yield('content')
	
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script>
		$(function() {
		$( "#expandable" ).accordion({
		collapsible: true,
		active: false
		});
		});
	</script>

	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
</body>
</html>