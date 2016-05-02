<!DOCTYPE html>
<html>
<head>
	<title>Two-Sided Toggle Menu</title>
	 <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
	 <link rel="stylesheet" href="styles.css">
	 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>

	<div id="loader-wrapper">
	    <div id="loader"></div>
	    <div class="loader-section section-left"></div>
	    <div class="loader-section section-right"></div>
	</div>

	<div id="select"> <br> <br>
		<a href="#" id="rent" class="btn btn-2">
			Find a place
		</a>
		<a href="#" id="rent-out" class="btn btn-2">
			Rent out
		</a>
	</div>

	<div id="rent-menu">
		<div class="spacer-big"></div>
		<div class="rent-menu">1</div>
		<div class="spacer"></div>
		<div class="rent-menu">2</div>
		<div class="spacer"></div>
		<div class="rent-menu">3</div>
		<div class="spacer"></div>
		<div class="rent-menu">4</div>
		<div class="spacer"></div>
		<div class="rent-menu-exit">Exit this menu</div>
		<div class="spacer-big"></div>
	</div>

	<div id="rent-out-menu">
		<div class="spacer-big"></div>
		<div class="rent-out-menu">1</div>
		<div class="spacer"></div>
		<div class="rent-out-menu">2</div>
		<div class="spacer"></div>
		<div class="rent-out-menu">3</div>
		<div class="spacer"></div>
		<div class="rent-out-menu">4</div>
		<div class="spacer"></div>
		<div class="rent-out-menu-exit">Exit this menu</div>
		<div class="spacer-big"></div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="style.js"></script>
</body>
</html>