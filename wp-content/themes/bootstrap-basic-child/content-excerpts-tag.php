<?php
$summary = get_field('excerpt');
?>

<div class="col-sm-6 excerpts">
	<div class="box">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<p class="publication">From <a class="black" href="<?php echo esc_url(home_url());?>/<?php $post_type = get_post_type_object( get_post_type($post) );
echo $post_type->label ; ?>/"><?php $post_type = get_post_type_object( get_post_type($post) );
echo $post_type->description ; ?></a></p>
				<h1 class="entry-title no-headroom"><a class="red" href="<?php echo the_permalink(); ?>/"><?php the_title(); ?></a></h1>
			</header><!-- .entry-header -->	
			<div class="entry-excerpt">
				<?php echo $summary; ?> <a class="red" href="<?php the_permalink(); ?>" title="continue reading...">[...]</a>
			</div>
			<div class="entry-meta bottomspace">
				<span class="black tags">
					<br />
					Topics: <?php
						/* translators: used between list items, there is a space after the comma */
						$tags_list = get_the_tag_list('', __(', ', 'bootstrap-basic'));
						if ($tags_list) {
							echo $tags_list; 
						} // End if $tags_list ?>
				</span>
			</div>
				<?php 
				/**
				 * This wp_link_pages option adapt to use bootstrap pagination style.
				 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
				 */
				wp_link_pages(array(
					'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
					'after'  => '</ul></div>',
					'separator' => ''
				));
				?> 
			<!-- .entry-content -->

		</article><!-- #post-## -->

	</div>

</div>
