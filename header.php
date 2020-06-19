<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include("one-data.php") ?>
<?php include("two-data.php") ?>
<?php include("functions.php") ?>
<?php include("settings.php") ?>

<html>
	<head>
		<title>PHP Test</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="image avatar"><img src="images/old-pic.jpg" alt="" /></a>
					<?php echo $settings["intro"] ?>
				</div>
			</header>
