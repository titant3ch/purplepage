<!DOCTYPE html>
<html>
<head>
	<title><?php $blog_title = get_bloginfo('name'); echo $blog_title;?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<meta charset="UTF-8">
</head>
<body class="bigbody">

<header>

	<div class="top">
		<div class="title2">
			<p class="bighead">THE PURPLE PAGE</p>
			<p class="smallhead">Software Solutions Consultant Resource Page</p>
		</div>
	</div>

	<div  class="headimg">
		<img id="planeflight" src="<?php echo get_template_directory_uri(); ?>/img/fedexplanecoulds.jpg" alt="Plane in flight">
	</div>
	
</header><!-- /header -->

<div class="middle">