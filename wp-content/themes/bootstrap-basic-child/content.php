<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} 
		?>
		<header class="entry-header">
		
		<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list(__(', ', 'bootstrap-basic'));
				if (!empty($categories_list)) {
			?> 
			<?php } // End if categories ?>
		<h3 class="category-title black"><?php echo $categories_list; ?></h3>
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ('post' == get_post_type()) { ?> 
		<div class="entry-meta">
			<h4 class="author"><?php $terms = get_the_terms( $post->ID , 'contributors' );
					if ($terms) {
					$count = count($terms);
					$i = 0; 
                    foreach ( $terms as $term ) {
                    	$i++;
                        $term_link = '<a class="black" href="' . get_term_link( $term, 'contributors' ) . '">' . $term->name . '</a>';
                        if ( $count != $i ) {               	
                    		$term_link .= ', ';
        				}
        				else {
        					$term_link .= '';
        				}
                      echo $term_link;  
                    } }
                    else {}
                ?></h4>
			<p>Originally published in SRAM
				<?php $terms = get_the_terms( $post->ID , 'issue-info' ); 
                    foreach ( $terms as $term ) {
                        $term_link = get_term_link( $term, 'issue-info' );
                        if( is_wp_error( $term_link ) )
                        continue;
                    echo '<a class="black" href="' . $term_link . '">' . $term->name . '</a>';
                    } 
                ?></p>
		</div><!-- .entry-meta -->
		<?php } //endif; ?> 
	</header><!-- .entry-header -->

	
	<?php if (is_search()) { // Only display Excerpts for Search ?> 
	<div class="entry-summary">
		<?php the_excerpt(); ?> 
		<div class="clearfix"></div>
	</div><!-- .entry-summary -->
	<?php } else { ?> 
	<div class="entry-content red bold-links">
		<?php the_content(bootstrapBasicMoreLinkText()); ?> 
		<div class="clearfix"></div>
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
	</div><!-- .entry-content -->
	<?php } //endif; ?> 
</article><!-- #post-## -->