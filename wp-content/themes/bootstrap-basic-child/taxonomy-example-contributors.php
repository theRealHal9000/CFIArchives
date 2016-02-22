<?php 
/**
 * Displaying archive page (category, tag, archives post, author's post)
 * 
 * @package bootstrap-basic
 */

get_header(); 

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<?php get_sidebar('example'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main headroom" role="main">
						<?php if (have_posts()) {  
							$queried_object = get_queried_object(); 
							$taxonomy = $queried_object->taxonomy;
							$term_id = $queried_object->term_id;  
							$headshot = get_field('img', $queried_object); 
							$size = 'thumb'; 

							if ($headshot) {
							?>
							<div class="row">
								<div class="col-sm-3">
									<?php echo wp_get_attachment_image($headshot, $size); ?>
								</div>
								<div class="col-sm-9">
									<h1 class="page-title"><?php echo single_term_title(); ?></h1>	
									<?php
									// Show an optional term description.
									$term_description = term_description();
									if (!empty($term_description)) {
										printf('<div class="taxonomy-description red">%s</div>', $term_description);
									} //endif;
									?>
								</div>
							</div>
							<hr />
							<?php } else { ?>
								<h1 class="page-title"><?php echo single_term_title(); ?></h1>	
								<?php
								// Show an optional term description.
								$term_description = term_description();
								if (!empty($term_description)) {
									printf('<div class="taxonomy-description red">%s</div>', $term_description);
								} //endif;
								?>
								<hr />
							<?php } ?>
						
						<?php 
						/* Start the Loop */
						while (have_posts()) {
							the_post();

							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part('examplecontent-excerpts', get_post_format());
						} //endwhile; 
						?> 

						<div class="row">
							<div class="col-xs-12">
								<?php
								bootstrapBasicPagination();
								?> 
								<?php } else { ?> 
								<?php get_template_part('no-results', 'index'); ?>
								<?php } // endif; ?> 
							</div>
						</div> 
					</main>
				</div>
<?php get_footer(); ?> 