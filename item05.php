<!DOCTYPE html>
<html>
<head>
	<?php 
	
	$title = "Одежда и аксессуары";
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
					$it05 = active;
					require_once "/blocks/menu.php";
				?>

				<?php 
					$img = "Img/wear1.jpg";
					$text = file_get_contents('txt/it05.txt');
					require_once "/blocks/item.php";
				?>
			
		</div>
	</div>

<!-- Место для футера -->
	
	<?php 
		require_once "/blocks/footer.php";
	?>

</body>
</html>