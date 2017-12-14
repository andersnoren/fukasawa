<?php

/* Template Name: Archive Template */

get_header(); ?>

<div class="content thin">						

	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<div <?php post_class( 'post single' ); ?>>
		
			<div class="post-inner">
	
				<div class="post-header">
																										
					<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
														
				</div><!-- .post-header -->
			   				        			        		                
				<div class="post-content">

					<?php the_content(); ?>
										
				</div><!-- .post-content -->
				
				<div class="clear"></div>
				
				<div class="archive-container">
				
					<h3><?php _e( 'Posts', 'fukasawa' ); ?></h3>
										            
		            <ul>
						<?php 
						
						$posts_archive = get_posts( array(
							'post_status'		=> 'publish',
							'posts_per_page'	=> -1,
						) );

						foreach( $posts_archive as $archive_post ) : ?>
							<li>
								<a href="<?php echo get_the_permalink( $archive_post->ID ); ?>" title="<?php the_title_attribute( array( 'post' => $archive_post->ID ) ); ?>">
									<?php echo get_the_title( $archive_post->ID );?> 
									<span><?php the_time( get_option( 'date_format' ), $archive_post->ID ); ?></span>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
		            
		            <h3><?php _e( 'Categories','fukasawa') ?></h3>
		            
		            <ul>	            
			            <?php wp_list_categories( 'title_li='); ?>
		            </ul>
		            
		            <h3><?php _e( 'Tags','fukasawa') ?></h3>
		            
		            <ul>
						<?php 
											
						$tags = get_tags();
						
						if ( $tags ) {
							foreach ( $tags as $tag ) {
								echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s", 'fukasawa' ), $tag->name ) . '">' . $tag->name . '</a></li> ';
							}
						}
						?>
		            </ul>
		            
		            <h3><?php _e( 'Contributors', 'fukasawa' ); ?></h3>
	            	
	            	<ul>
	            		<?php wp_list_authors(); ?> 
	            	</ul>
	            	
	            	<h3><?php _e( 'Archives by Year', 'fukasawa' ); ?></h3>
	            	
	            	<ul>
	            	    <?php wp_get_archives( 'type=yearly' ); ?>
	            	</ul>
	            	
	            	<h3><?php _e( 'Archives by Month', 'fukasawa' ); ?></h3>
	            	
	            	<ul>
	            	    <?php wp_get_archives( 'type=monthly' ); ?>
	            	</ul>
	            
		            <h3><?php _e( 'Archives by Day', 'fukasawa' ); ?></h3>
		            
		            <ul>
		                <?php wp_get_archives( 'type=daily' ); ?>
		            </ul>
	        
	            </div><!-- .archive-container -->
            
			</div><!-- .post-inner -->
			
			<?php if ( comments_open() ) comments_template( '', true ); ?>

		</div><!-- .post -->
			
	<?php 
	endwhile; 
	else: ?>

		<p><?php _e( "We couldn't find any posts that matched your query. Please try again.", "fukasawa" ); ?></p>

	<?php endif; ?>
	
</div><!-- .content -->
								
<?php get_footer(); ?>