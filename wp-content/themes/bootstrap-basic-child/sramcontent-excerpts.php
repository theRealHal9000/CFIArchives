<?php
$summary = get_field('excerpt');
?>

<div class="col-sm-6 excerpts">
	<div class="box">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><a class="red" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header><!-- .entry-header -->
			<div class="entry-meta">
				<span class="black"><?php
				$terms = get_the_terms( $post->ID , 'SRAM-category' ); 
                    foreach ( $terms as $term ) {
                        $term_link = get_term_link( $term, 'SRAM-category' );
                        if( is_wp_error( $term_link ) )
                        continue;
                    echo '<a class="black" href="' . $term_link . '">' . $term->name . '</a>';
                    } 
                ?></spam> 
				<?php $terms = get_the_terms( $post->ID , 'SRAM-contributors' );
					if ($terms) {
					echo ' &bull; ';
					$count = count($terms);
					$i = 0; 
                    foreach ( $terms as $term ) {
                    	$i++;
                        $term_link = '<a class="black" href="' . get_term_link( $term, 'SRAM-contributors' ) . '">' . $term->name . '</a>';
                        if ( $count != $i ) {               	
                    		$term_link .= ', ';
        				}
        				else {
        					$term_link .= '';
        				}
                      echo $term_link;  
                    } }
                    else {}
                ?>
                 &bull;  
				<?php $terms = get_the_terms( $post->ID , 'SRAM-issue-info' ); 
                    foreach ( $terms as $term ) {
                        $term_link = get_term_link( $term, 'SRAM-issue-info' );
                        if( is_wp_error( $term_link ) )
                        continue;
                    echo '<a class="black" href="' . $term_link . '">' . $term->name . '</a>';
                    } 
                ?>

			</div>	
			<div class="entry-excerpt">
				<?php echo $summary; ?> <a class="red" href="<?php the_permalink(); ?>" title="continue reading...">[...]</a>
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

		</article><!-- #post-## -->

	</div>

</div>
