<?php
$tituloWebRedes = "";
$descripccionRedes = "";
$descripccionWeb = "";
$urlWeb = "";
$twitterCard = "";
$favicon = "";
$imgWeb = "";
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content=<?php echo $descripccionWeb; ?>>
	<link rel="shortcut icon" href=<?php echo $favicon; ?>>
	<!-- OPEN GRAPH -->
	<meta property="og:title" content=<?php echo $tituloWebRedes; ?> />
	<meta property="og:type" content="website" />
	<meta property="og:url" content=<?php echo $urlWeb; ?> />
	<meta property="og:image" content=<?php echo $imgWeb; ?> />
	<meta property="og:description" content=<?php echo $descripccionRedes; ?> />
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content=<?php echo $tituloWebRedes; ?>>
	<meta itemprop="description" content=<?php echo $descripccionRedes; ?>>
	<meta itemprop="image" content=<?php echo $imgWeb; ?>>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content=<?php echo $twitterCard; ?>>
	<meta name="twitter:site" content=<?php echo $urlWeb; ?>>
	<meta name="twitter:title" content=<?php echo $tituloWebRedes; ?>>
	<meta name="twitter:description" content=<?php echo $descripccionWeb; ?>>
	<meta name="twitter:image:src" content=<?php echo $imgWeb; ?>>
	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="assets/fontawesome/css/all.css">
	<script src="assets/fontawesome/js/all.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css" />
	<!-- STYLES -->
	<link rel="stylesheet" href="css/styles.css">