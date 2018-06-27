<?php
/**
 * @package Materialist
 */
?>

<div class="hentry-separator">
	<?php materialist_posted_on(); ?>
</div><!-- .entry-meta -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		if( has_post_thumbnail( ) ){
			echo '<div class="entry-featured-image">';
			the_post_thumbnail( 'large' );
			echo '</div>';
		} 
	?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links"><span class="page-links-title">'. __( 'Pages:', 'materialist' ) .'</span>',
				'after'  => '</div>',
				'pagelink' => '<span class="page-link">%</span>'
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php materialist_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
	<footer class="entry-footer">
	<span class="edit-link"><a class="post-edit-link" href="#">Share</a></span>
	</footer>
</article><!-- #post-## -->
