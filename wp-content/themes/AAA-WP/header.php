<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tetris
 * @subpackage AAA-WP
 * @since AAA-WP 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <title><?PHP 
	if(is_archive()){
		echo get_the_archive_title();
	}else{
		echo get_the_title();
	}
  ?></title>
  <link rel="icon" type="image/png" href="<?PHP echo get_site_icon_url();?>" />
	<?php wp_head(); ?>
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light custom-width">
	<div class="container-fluid">
		<div class="logo"><img src="<?PHP echo get_field('site_logo',27);?>" alt="American Alumni Society Logo" / /></div>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarNavAltMarkup"
			aria-controls="navbarNavAltMarkup"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link" aria-current="page" href="/">Home</a>
				<div class="line-seperator"></div>
				<div class="dropdown">
					<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						About us
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item" href="/about.html">About</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
					</div>

				<div class="line-seperator"></div>
				<a class="nav-link active" href="/news.html">News & Events</a>
				<div class="line-seperator"></div>
				<a class="nav-link" href="/join-us.html">Join</a>
				<div class="line-seperator"></div>
				<a class="nav-link" href="/contact.html">Contact us</a>
			</div>
		</div>
	</div>
</nav>
