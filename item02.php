<!DOCTYPE html>
<html>
<head>
	<?php 
	
	$title = "Товары для дома";
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
					$it02 = active;
					require_once "/blocks/menu.php";
				?>

				<?php 
					$img = "Img/polot1.jpg";
					$text = file_get_contents('txt/it02.txt');
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