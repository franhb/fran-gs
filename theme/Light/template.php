<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Light theme for GetSimple CMS
*****************************************************/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,100' rel='stylesheet' type='text/css'>
	<meta charset="utf-8" />
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />
</head>
<body id="<?php get_page_slug(); ?>" >
	<div id="logo">
		<a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
	</div>
<div id="wrapper">
	<div id="sidebar">
		<?php get_component('sidebar');	?>
		<p class="page-meta">Powered by <a href='http://get-simple.info'>GetSimple</a><br />
		<a href='http://blog.orkunsoylu.com'>Light</a> Theme. Valid&nbsp;<a href="http://validator.w3.org/check?uri=referer">HTML5</a>&nbsp;and&nbsp;<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3&amp;vextwarning=true">CSS3</a></p>	
	</div>
	<div id="content">
		<h1><?php get_page_title(); ?></h1>	
		<div class="page-text">
			<?php get_page_content(); ?>			
		</div>
	</div>
	<div class="clear"></div>
</div>
<div id="menu">
	<ul id="nav">
		<?php get_navigation(return_page_slug()); ?>	
	</ul>
</div>
</body>
</html>