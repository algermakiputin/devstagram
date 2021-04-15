<?php $class = ( $wp_query->current_post + 1 === $wp_query->post_count ) ? 'clear last' : 'clear'; ?>

<div id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>	

	<?php get_template_part( 'template-parts/entry', 'meta' ); ?>

	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
	<?php if ( has_post_thumbnail() ) { ?>
		<a class="thumbnail-link" href="<?php the_permalink(); ?>">
			<div class="thumbnail-wrap">
				<?php 
					the_post_thumbnail('medium_large'); 
				?>
			</div><!-- .thumbnail-wrap -->
		</a>
	<?php } ?>	

<!-- 	<div class="entry-category">
		<?php revenue_first_category(); setPostViews(get_the_ID()); ?>
	</div> -->

	
	
	

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<span class="read-more"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read more &raquo;', 'revenue'); ?></a></span>
	</div><!-- .entry-summary -->


</div><!-- #post-<?php the_ID(); ?> -->