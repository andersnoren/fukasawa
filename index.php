<?php get_header(); ?>

<div class="content">
																	                    
	<?php if ( have_posts() ) :
		
		$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		
		if ( 1 < $paged ) : ?>
		
			<div class="page-title">
			
				<h4><?php printf( __( 'Page %1$s of %2$s', 'fukasawa' ), $paged, $wp_query->max_num_pages ); ?></h4>
				
			</div><!-- .page-title -->
			
			<div class="clear"></div>
		
		<?php endif; ?>
	
		<div class="posts" id="posts">
				
			<?php 
			while ( have_posts() ) : the_post();
			
				get_template_part( 'content', get_post_format() );
				
			endwhile; 
			?>
		
		</div><!-- .posts -->

	<?php endif; ?>
	
	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		
		<div class="archive-nav">
				
			<?php echo get_next_posts_link( __( 'Older posts', 'fukasawa' ) . ' &rarr;' ); ?>
				
			<?php echo get_previous_posts_link( '&larr; ' . __( 'Newer posts', 'fukasawa' ) ); ?>
			
			<div class="clear"></div>
						
		</div><!-- .archive-nav -->
						
	<?php endif; ?>
		
</div><!-- .content -->
	              	        
<?php get_footer(); ?>