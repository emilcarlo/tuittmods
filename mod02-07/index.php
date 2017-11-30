<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Intro to CSS</title>
	
	<!-- external stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- internal stylesheet -->
<!-- 	<style type="text/css">
		body * {
			background-color: blue;
		}
	</style> -->

</head>
<body>

	<!-- Selectors -->

	<!-- Type Selector -->
	<!-- <h3>Type Selector</h3> -->
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


	<!-- ID Selector -->
	<h3>ID Selector</h3>
	<p id="para1"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


	<!-- Class Selector -->
	<h3>Class Selector</h3>
	<p class="paragraphs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<p class="paragraphs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<!-- <p class="paragraphs" style="background-color: yellow">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->

	<!-- Attribute selector -->

	<h3>Attribute Selecor</h3>
	<a href="#" target="_blank">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a><br>
	<a href="#" target="_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a><br>
	<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a>

	<h3>Combinators</h3>
	<div>
	<h5>Adjacent Sibling</h5>
	<a href="#" target="_blank">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a><br>
	<a href="#" target="_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a><br><br>
	<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a>
	</div>

	<div>
	<h5>General Sibling</h5>
	<br>
	<a href="#" target="_blank">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a>
	<br>
	<div>
	<a href="#" target="_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a>
	</div>
	<br>
	<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a>
	</div>

	<div>
	<h5>Child selector</h5>
	<br>
	<div>
	<a href="#" target="_blank">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a>
	</div>
	<br>
	<p>
		<div>
		<a href="#" target="_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a>
		</div>
		<div>
		<a href="#" target="_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a>
		</div>
	</p>
	<br>
	<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a>

	<div>
		<ul>
			<li>item 1</li>
			<li>item 2</li>
			<li>item 3</li>
			<li>item 4</li>
			<li>item 5</li>
		</ul>
	</div>

	<div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>

		<p class="thirdPara">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		
		<p id="lastChild">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
</body>
</html>