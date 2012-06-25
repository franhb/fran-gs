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

<div class="pageBaner"><!-- --></div>

<p class="breadcrumbs" >
	<a href="<?php get_site_url(); ?>">Home</a> &rarr; <?php Innovation_Parent_Link(get_parent(FALSE)); ?> <?php get_page_clean_title(); ?>
</p>

<section class="clearfix">
	
	<article class="fullPage">
		<h1 class="pageTitle"><?php get_page_title(); ?></h1>
		<?php get_page_content(); ?>
	</article>
	
</section>				
			<!-- page footer
			<div class="footer">
				<p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
			</div> -->



<!-- include the footer template -->
<?php include('footer.inc.php'); ?>