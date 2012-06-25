<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 

/*
@File: footer.php
@Package: GetSimple
@Action: simplico theme for GetSimple CMS
@Author: maciej kopala mdesigns.pl
*/
?>

<!-- site footer -->
<footer class="clearfix" >
	<?php get_footer(); ?>
	
		<div class="left">
			&copy; copyrights: <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a> | 
			Design by <a target="_blank" href="http://mdesigns.pl">mkopala</a> | <?php get_site_credits(); ?>
		</div>
		
		<div class="right">
				<?php if (defined('FACEBOOK')) { ?>
					<a href="<?php echo FACEBOOK; ?>"><img src="<?php get_theme_url(); ?>/images/fFacebook.png" /></a>
				<?php } ?>
				<?php if (defined('TWITTER')) { ?>
					<a href="<?php echo TWITTER; ?>"><img src="<?php get_theme_url(); ?>/images/fTwitter.png" /></a>
				<?php } ?>
				<?php if (defined('LINKEDIN')) { ?>
					<a href="<?php echo LINKEDIN; ?>"><img src="<?php get_theme_url(); ?>/images/fLinkedin.png" /></a>
				<?php } ?>
		</div>
		
</footer>
	 
</div><!--wrapper-->	 
	 
</body>
</html>