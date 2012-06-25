<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Acidmind theme for GetSimple CMS
*****************************************************/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->

<head>
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<meta charset="utf-8" />
	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />
</head>

<body id="<?php get_page_slug(); ?>" >
	
	<div id="topwrapper">
		
		<div id="header">
			<a class="logo" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
		</div><!-- end header -->
		
		<div id="menu">
			<ul id="nav">
				<?php get_navigation(return_page_slug(FALSE)); ?>
			</ul>
		</div><!-- end menu -->
		
	</div><!-- end topwrapper -->
	
	<div id="wrapper">	
	
		<div id="content">		
			<div id="page-content">
			<h1><?php get_page_title(); ?></h1>	
				<div class="page-text">
					<?php get_page_content(); ?>
					<p class="page-meta">Publicado el &nbsp;<span><?php get_page_date('d-m-Y'); ?></span></p>
				</div>
			</div>	
		</div>	
		
		<div id="sidebar">
			<div class="section">
				<?php get_component('sidebar');	?>
				
			</div>
			<div class="section">
				<h2>&Uacute;ltimas noticias</h2>
				<?php nm_list_recent(); ?>
			</div>

			<div class="section">
				<h2>&Uacute;ltimas entradas del blog</h2>
				<?php show_blog_recent_posts(); ?>
			</div>
		</div>

		<div class="clear"></div>
		<div id="footer_txt"><?php echo date('Y'); ?>&nbsp;&copy;&nbsp;<?php get_site_name(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://blog.orkunsoylu.com/">AcidMind</a>&nbsp;Theme
<p class="page-meta">Valid&nbsp;<a href="http://validator.w3.org/check?uri=referer">HTML5</a>&nbsp;and&nbsp;<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3&amp;vextwarning=true">CSS3</a>.</p>
</div>
		<?php get_footer(); ?>
		
	</div><!-- end wrapper -->
</body>
</html>