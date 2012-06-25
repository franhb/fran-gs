<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

/*
@File: tempate.php
@Package: GetSimple
@Action: simplico theme for GetSimple CMS
@Author: maciej kopala mdesigns.pl
*/

Innovation_Settings();
include('header.inc.php'); 
?>
	
<div class="baner">
	<img alt="" src="<?php get_theme_url(); ?>/images/baner.jpg" />
	<div class="caption"><?php get_component('baner');	?></div>
</div>

<div class="motto">
	<div class="caption"><?php get_component('motto');	?></div>
</div>

<section class="clearfix">
	
	<article>
		<h1 class="pageTitle"><?php get_page_title(); ?></h1>
		<?php get_page_content(); ?>
	</article>
	
	<aside class="frontRight">
		<?php get_component('fright');	?>
	</aside>
	
</section>				

<?php include('footer.inc.php'); ?>