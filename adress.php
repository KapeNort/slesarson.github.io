<!DOCTYPE html>
<html>
<head>
	<?php 
	
	$title = "Как до нас добраться";
	require_once "/blocks/head.php";

	?>
</head>
<body>
	<div id="wrap">
		<div class="main">
				<?php 
					require_once "/blocks/header.php";
				?>

				<hr>

				<?php 
					$adress = active;
					require_once "/blocks/menu.php";
				?>

				<?php 
					$text = file_get_contents('txt/adress.txt');
					require_once "/blocks/contacts.php";
				?>
			
		</div>
	</div>

<!-- Место для футера -->
	
	<?php 
		require_once "/blocks/footer.php";
	?>

</body>
</html>