	</div>
	<footer id="footer" class="footer">
	  	<div id="back-top-wrapper">
	    	<p id="back-top">
		    	<a href="#top"><span></span></a>
		    </p>
	    </div>
		<div class="container">
			<div id="copyright" class="copyright clearfix">
				
				<div class="clearfix">
					<div id="footer-text" class="footer-text pull-left">
						<?php $myfooter_text = of_get_option('footer_text'); ?>
						
						<?php if($myfooter_text){?>
							<?php echo of_get_option('footer_text'); ?>
						<?php } else { ?>
							<span class="site-name"><?php bloginfo('name'); ?></span> &copy; <?php echo date("Y"); ?>&nbsp; | &nbsp;<a href="<?php echo home_url(); ?>/privacy-policy/" title="Privacy Policy"><?php _e('Privacy Policy', 'cherry'); ?></a>
						<?php } ?>
						<br />
						<?php _e('Website Template designed by', 'cherry') ?> <a rel="nofollow" href="http://www.templatemonster.com"><?php _e('TemplateMonster.com', 'cherry'); ?></a>
					</div>
					
					<!-- Social Links -->
					<ul class="social_links_footer pull-right">
						<?php if(of_get_option('footer_facebook') != "") {?>
						<li class="ico-facebook"><a href="#" class="hide-text">Facebook</a></li>
						<?php } ?>
						<?php if(of_get_option('footer_pinterest') != "") {?>
						<li class="ico-pinterest"><a href="#" class="hide-text">Facebook</a></li>
						<?php } ?>
						<?php if(of_get_option('footer_twitter') != "") {?>
						<li class="ico-twitter"><a href="#" class="hide-text">Facebook</a></li>
						<?php } ?>
						<?php if(of_get_option('footer_rss') != "") {?>
						<li class="ico-rss"><a href="#" class="hide-text">Facebook</a></li>
						<?php } ?>
					</ul>
					<!-- /Social Links -->
				</div>
				
				<?php if ( of_get_option('footer_menu') == 'true') { ?>  
					<nav class="nav footer-nav">
						<?php wp_nav_menu( array(
							'container'       => 'ul',
							'depth'           => 0,
							'theme_location' => 'footer_menu' 
							)); 
						?>
					</nav>
				<?php } ?>
			</div><!--/Copyright-->
		</div><!--/Container-->
	</footer>
</div><!--#main-->