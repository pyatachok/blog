<?php
/**
	* Template Name: Testimonials
*/

get_header(); ?>
	<?php get_template_part('title'); ?>
	<div class="container">
		<div class="row">		
			<div id="content" class="span8 <?php echo of_get_option('blog_sidebar_pos') ?>">
				<?php if (have_posts()) : while (have_posts()) : the_post();
					$content = get_the_content();
					if (!empty($content)) { ?>
						<div id="page-content"><?php the_content(); ?></div>
					<?php }				
			    endwhile; endif;

				$temp = $wp_query;
				$wp_query= null;
				$wp_query = new WP_Query();
				$wp_query->query('post_type=testi&showposts=4&paged='.$paged);
			    
			    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();		    
				$custom = get_post_custom($post->ID);
				$testiname = $custom["my_testi_caption"][0];
				$testiurl = $custom["my_testi_url"][0];
				$testiinfo = $custom["my_testi_info"][0];
				?>
				<article id="post-<?php the_ID(); ?>" class="testimonial clearfix">
					<blockquote class="testimonial_bq">
						<?php if(has_post_thumbnail()) {							
							$thumb = get_post_thumbnail_id();
							$img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
							$image = aq_resize( $img_url, 120, 120, true ); //resize & crop img
						?>
						<figure class="featured-thumbnail thumbnail hidden-phone">
							<img src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
						</figure>
						<?php } ?>  
						<div class="testimonial_content">
							<?php the_content(); ?>					  
							<small>
								<?php if($testiname) { ?>
									<span class="user"><?php echo $testiname; ?></span><?php _e(', ', 'cherry'); ?>
								<?php } ?>
								<?php if($testiinfo) { ?>
									<span class="info"><?php echo $testiinfo; ?></span><br />
								<?php } ?>
								<?php if($testiurl) { ?>
									<a href="<?php echo $testiurl; ?>"><?php echo $testiurl; ?></a>
								<?php } ?>
							</small>
						</div>
					</blockquote>
				</article>		      
			    <?php endwhile; else: ?>			
			    <div class="no-results">
					<?php echo '<p><strong>' . __('There has been an error.', 'cherry') . '</strong></p>'; ?>
			        <p><?php _e('We apologize for any inconvenience, please', 'cherry'); ?> <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>"><?php _e('return to the home page', 'cherry'); ?></a> <?php _e('or use the search form below.', 'cherry'); ?></p>
			        <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
			    </div><!--no-results-->
			    <?php endif; ?>
			    		    
			    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
			        <ul class="pager">
						<li class="previous">
						  <?php previous_post_link('%link', __('&laquo; Previous post', 'cherry')) ?>
						</li><!--.previous-->
						<li class="next">
						  <?php next_post_link('%link', __('Next Post &raquo;', 'cherry')) ?>
						</li><!--.next-->
					</ul><!--.pager-->
			      <?php endif; ?>
			    
			    <?php $wp_query = null; $wp_query = $temp;?>
			</div><!--#content-->
			<?php get_sidebar(); ?>
	    </div><!--.row-->
	</div><!--.container-->  
<?php get_footer(); ?>