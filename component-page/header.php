<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- <link rel="shortcut icon" href="./assets/images/logo.png"/> -->
	<title>Sprinthink HTML</title>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="./assets/css/main.min.css">
</head>

<body>
	<div class="page-wrapper">
		<!-- ./START - Header -->
		<header class="header box-shadow">
			<div class="header-wrapper">
				<a href="./" class="header-logo">
					<img src="./assets/images/logo.svg" alt="Logo">
				</a>
				<div class="header-toggle">
					<img src="./assets/icons/icon-bars.svg" alt="Menu">
				</div>
				<div class="header-menu">
					<ul class="menu-primary">
						<li class="menu-item-has-children">
							<a href="./training-coaching.php">Training & Coaching</a>
							<span class="header-caret">
								<?php include('./assets/icons/icon-caret.svg')?>
							</span>
							<ul class="sub-menu">
								<li><a href="./design-sprint.php">Design Sprint & Offline Training</a></li>
								<li><a href="./tot.php">Training for Trainers</a></li>
								<li><a href="./cil.php">Corporate Innovation Lab</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="./innovation-management.php">Innovation Management</a>
							<span class="header-caret">
								<?php include('./assets/icons/icon-caret.svg')?>
							</span>
							<ul class="sub-menu">
								<li><a href="./ms-innovation-awards.php">Management Service: Innovation Awards</a></li>
								<li><a href="./ms-incubation.php">Management Service: Incubation</a></li>
							</ul>
						</li>
						<li><a href="learning.sprinthink.id" target="_blank">E-Learning</a></li>
						<li><a href="./blog.php">Blog</a></li>
						<li class="menu-item-has-children">
							<a href="#">More</a>
							<span class="header-caret">
								<?php include('./assets/icons/icon-caret.svg')?>
							</span>
							<ul class="sub-menu">
								<li><a href="./about-us.php">About Us</a></li>
								<li><a href="./contact.php">Contact</a></li>
								<li><a href="./faq.php">FAQ</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<!-- ./END - Header -->