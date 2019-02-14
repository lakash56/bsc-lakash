
<!DOCTYPE html>
<html>
<head>
	<title>My Dynamic website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="container">
	<?php
	 include('header.php');  
	?>
	<div id="content">
		<?php
		if ($_get['page']) {
		  	$page= $_GET['page'];
		  	$display=$page.'.php';
		  	include($display);
		  }  
		  else
		  {
		  	echo 'this is dynamic';
		  }
		?>

	</div>
	<?php  
	include('footer.php');
	?>
</div>

</body>
</html>
