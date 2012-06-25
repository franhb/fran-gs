<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

/*
@File: header.php
@Package: GetSimple
@Action: simplico theme for GetSimple CMS
@Author: maciej kopala mdesigns.pl
*/

?><!DOCTYPE html>
<html lang="en" >

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="robots" content="index, follow">
	<link rel="shortcut icon" href="<?php get_theme_url(); ?>/images/favicon.ico" type="image/x-icon" />
	
	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/reset.css" />
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css?v=<?php echo get_site_version(); ?>" />
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 

	<link href="http://fonts.googleapis.com/css?family=Wire+One" rel="stylesheet" type="text/css">
	
	<?php get_header(); ?>
	
</head> 

<body id="<?php get_page_slug(); ?>" >

<div class="wrapper">
	
<header class="clearfix">

	<div class="clearfix">
		
		<h1><a href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a></h1>
	
		<div class="headerSocial">
			<?php if (defined('FACEBOOK')) { ?>
				<a href="<?php echo FACEBOOK; ?>"><img src="<?php get_theme_url(); ?>/images/hFacebook.png" /></a>
			<?php } ?>
			<?php if (defined('TWITTER')) { ?>
				<a href="<?php echo TWITTER; ?>"><img src="<?php get_theme_url(); ?>/images/hTwitter.png" /></a>
			<?php } ?>
			<?php if (defined('LINKEDIN')) { ?>
				<a href="<?php echo LINKEDIN; ?>"><img src="<?php get_theme_url(); ?>/images/hLinkedin.png" /></a>
			<?php } ?>
		</div>
		
	</div>
		
	<nav class="clearfix">
		<ul>
			<?php get_navigation(get_page_slug(FALSE)); ?>
		</ul>
	</nav>

</header>