<!DOCTYPE html>
<html> <!-- Tool index.php -->
<head>
	<meta charset="utf-8">
	<title>Template Tool Index</title>
	<link rel="icon" type="image/png" href="../../images/icon.png">
	<link rel="stylesheet" type = "text/css" href="toolStyle.css">
	<link rel="stylesheet" type = "text/css" href="../../css/mainStyle.css">
	<link rel="stylesheet" type = "text/css" href="../../src/w3.css">
	<link rel="stylesheet" type = "text/css" href="../../css/toolbarStyle.css">
	<script type="text/javascript" src="../../src/jquery-3.2.1.min.js"></script>
</head>
<body>
	<!-- Tool Bar -->
	<?php
		$page_title = "Weapon Creator Tool";
		$page_backlink = "../../index.php"; /* # for none */
		$barMode = array("none"); /* "none" for no buttons */
		include("../../toolBar.php"); 
	?>

	<!-- Main Page -->
	<h1>Default Tool Index Page of [ <?php echo basename(__DIR__) ?> ]</h1>
	
</body>
<script>
</script>
</html>