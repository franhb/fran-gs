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
	
	<article>
		<h1 class="pageTitle"><?php get_page_title(); ?></h1>
		<?php get_page_content(); ?>
	</article>
	
	<aside class="news">
		
		<div>
			<h2>Latest News</h2>
			<?php nm_list_recent(); ?>
		</div>
		
		<div>
			<h2>Archive</h2>
			<?php nm_list_archives(); ?>
		</div>
		
		<div>
			<h2>Tags</h2>
			<?php nm_list_tags(); ?>
		</div>

		
	</aside>
	
</section>				

<?php include('footer.inc.php'); ?>