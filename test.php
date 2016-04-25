<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

		<title>Nice Resume</title>		
		
	</head>
	<body>
		<div id="header"></div>
		<div class="left">

<div class="menu">

<?php
include('php/menu.php');
?>

</div>

                </div>
		<div class="right">

<div class="examples">

<?php
include('php/examples.php');
echo"\n";
?>

	<?php
include('php/tests.php');
?>

</div>

</div>
		<div id="footer"></div>
	</body>
</html>