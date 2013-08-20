<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title ?></title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<?php if (isset($js)) { ?>
			<script src="js/<?php echo $js ?>.js"></script>
		<?php } ?>
		
		<!-- Le styles -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/common.css" rel="stylesheet">

		<?php if (isset($css)) { ?>
			<link href="css/<?php echo $css ?>.css" rel="stylesheet">
		<?php } ?>

	</head>
	<body>

		<div class="container<?php if (isset($fluid) && $fluid) { echo "-fluid"; } ?>">