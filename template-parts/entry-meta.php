<div class="entry-meta">

	<span class="entry-author"><?php the_author_posts_link(); ?></span> 
	<span class="entry-date"><?php echo get_the_date(); ?></span>
	<span class="entry-comment"><?php comments_popup_link( __('Leave a Comment','revenue'), __('1 Comment', 'revenue'), '% Comments', 'comments-link', __('comments off', 'revenue'));?></span>

</div>
<div class="entry-tags">
	<?php 
 		$post_tags = get_the_tags( $post->ID );
 
	?>
	<?php if ($post_tags): ?>
		<?php foreach ( $post_tags as $tag ): ?>
		 	<span class="post-tag"> #<?php echo $tag->name; ?></span>
		<?php endforeach; ?> 
	<?php endif; ?>	
</div>
<!-- .entry-meta -->