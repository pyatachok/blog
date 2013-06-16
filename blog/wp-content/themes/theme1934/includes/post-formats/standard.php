			<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
				
				<?php get_template_part('includes/post-formats/post-thumb'); ?>
				
				
				<header class="post-header">
				
				<?php if(!is_singular()) : ?>
				
				<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php _e('Permalink to:', 'cherry');?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
				<?php else :?>
				
				<h1 class="post-title"><?php the_title(); ?></h1>
				
				<?php endif; ?>
				
				</header>
				
				
				<?php if(!is_singular()) : ?>
				
				<!-- Post Content -->
				<div class="post_content">
					<?php $post_excerpt = of_get_option('post_excerpt'); ?>
					<?php if ($post_excerpt=='true' || $post_excerpt=='') { ?>
					
						<div class="excerpt">
						
						
						<?php 
						
						$content = get_the_content();
						$excerpt = get_the_excerpt();

						if (has_excerpt()) {

								the_excerpt();

						} else {
						
								if(!is_search()) {

								echo my_string_limit_words($content,45);
								
								} else {
								
								echo my_string_limit_words($excerpt,45);
								
								}

						}
						
						
						?>
						
						</div>
						
						
					<?php } ?>
					<a href="<?php the_permalink() ?>" class="btn btn-primary"><?php _e('Read more', 'cherry'); ?></a>
				</div>
				
				<?php else :?>
				
				<!-- Post Content -->
				<div class="post_content">
				
					<?php the_content(''); ?>
					
				</div>
				<!-- //Post Content -->
				
				<?php endif; ?>
				
				<div class="clear"></div>
				
				<?php get_template_part('includes/post-formats/post-meta'); ?>
			 
			</article>