<div id="main" class="main-holder"><!-- this encompasses the entire Web site -->

	<header id="header" class="header">
		<div class="container">
		
			<!-- BEGIN LOGO -->			
			<div class="logo">
				<?php if(of_get_option('logo_type') == 'text_logo'){?>
					<?php if( is_front_page() || is_home() || is_404() ) { ?>
						<h1 class="logo_h logo_h__txt"><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="logo_link"><?php bloginfo('name'); ?></a></h1>
					<?php } else { ?>
						<h2 class="logo_h logo_h__txt"><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="logo_link"><?php bloginfo('name'); ?></a></h2>
					<?php } ?>
					<!-- Site Tagline -->
				<?php } else { ?>
					<?php if(of_get_option('logo_url') == ''){ ?>
					<a href="<?php echo home_url(); ?>/" class="logo_h logo_h__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
                                            <h1 ><?php echo bloginfo('name'); ?></h1>
                                        </a>
					<?php } else { ?>
					<a href="<?php echo home_url(); ?>/" class="logo_h logo_h__img"><img src="<?php echo of_get_option('logo_url', "" ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
                                            <h1 ><?php echo bloginfo('name'); ?></h1>
                                        </a>
					<?php }?>
				<?php }?>
                                
			</div>
			<!-- END LOGO -->
			
				
		</div><!--.container-->
	</header>
	
	<?php if( is_front_page() ) { ?>
		<div id="slider-wrapper" class="slider" style="display: none;">
			<div class="container">
				<?php get_template_part('slider'); ?>
			</div>
		</div><!-- .slider -->
	<?php } ?>
	
	<div class="nav-holder clearfix">
		<div class="container">
			<div class="row">
				<div class="span12">
					<!-- BEGIN SEARCH FORM -->
					<?php if ( of_get_option('g_search_box_id') == 'yes') { ?>  
						<div class="search-form search-form__h hidden-phone pull-right">
							<form id="search-header" class="navbar-form pull-right" method="get" action="<?php echo home_url(); ?>/" accept-charset="utf-8">
								<input type="text" name="s" placeholder="<?php _e('Search', 'cherry'); ?>" class="search-form_it"> <input type="submit" value="<?php _e('Go', 'cherry'); ?>" id="submit" class="search-form_is btn btn-primary">
							</form>
						</div>  
					<?php } ?>
					<!-- END SEARCH FORM -->
					
					<!-- BEGIN MAIN NAVIGATION -->
					<nav class="nav nav__primary pull-left">
						<?php wp_nav_menu( array(
							'container'       => 'ul', 
							'menu_class'      => 'sf-menu', 
							'menu_id'         => 'topnav',
							'depth'           => 0,
							'theme_location'  => 'header_menu'
							)); 
						?>
					</nav>
					<!-- END MAIN NAVIGATION -->
				</div>
			</div>
		</div>
	</div>
	<div class="content-holder clearfix">