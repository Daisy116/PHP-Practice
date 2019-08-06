<?php

$fileDir = dirname ( __FILE__ );
$fileResource = opendir ( $fileDir );

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : ?>
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

	<ul>  <!-- html包php -->
		<?php for($i = 0;$i < 3;$i++){ ?>
		<li>1</li>
		<li><?php echo "i為".$i; ?></li>
		<?php } ?>
	</ul>

<?php closedir($fileResource); ?>
</body>
</html>
