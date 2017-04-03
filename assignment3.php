<?php
	include 'ParentClass.php';
	include 'ChildClass.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	<link rel="stylesheet" href="./css/assignment3.css">
</head>
<body>
	<h1 class="name">Nick Taglianetti - CS1520 Assignment 3</h1>
	<div class="Pittsburghify">
		<?php
			if (null == isset($_POST['Submit'])) {
		?>
		<h2>What is Your Pittsburghese Name?</h2>
		<form name="pgh-form" onsubmit="return validateName()" method="post">
			First Name:<br>
			<input type="text" name="first" size="50"><br>
			Last Name:<br>
			<input type="text" name="last" size="50"><br>
			<input type="submit" value="Pittsburghify My Name!!!" name="Submit">
		</form>
	</div>
	<?php
		}
		else {
			echo "<h1 class=\"flash\">Your Pittsburghese Name is:</h1>";
			$PghName = new ChildClass($_POST['first'], $_POST['last'], "");
			$PghName->setRandomPghName();
			echo "<h2>".$PghName."</h2>";
		}
	?>
	<footer>
		<p>
			&copy; Nicholas C. Taglianetti, 2017
		</p>
	</footer>
	<script type="text/javascript" src="./js/validate.js"></script>
</body>
</html>
