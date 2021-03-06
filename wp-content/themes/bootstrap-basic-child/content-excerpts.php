<?php
$slug = get_field('slug');
?>

<div class="col-sm-6 excerpts">
	<div class="box">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><a class="red" href="<?php echo esc_url(home_url()) ?>/<?php echo $slug; ?>/"><?php the_title(); ?></a></h1>
			</header><!-- .entry-header -->	
			<div class="entry-excerpt">
				<?php the_content(); ?>
			</div>
			<div class="entry-meta">
				<span class="black tags">
					Frequent Topics: <?php
						/* translators: used between list items, there is a space after the comma */
						$tags_list = get_the_tag_list('', __(', ', 'bootstrap-basic'));
						if ($tags_list) {
							echo $tags_list; 
						} // End if $tags_list ?>
				</span>
				<a class="red" href="<?php echo esc_url(home_url()) ?>/<?php echo $slug; ?>/">
					<h3 class="browse">
						Browse all Articles &raquo;
					</h3></a>
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
