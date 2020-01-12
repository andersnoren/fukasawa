<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
		 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>

		<?php 
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open(); 
		}
		?>

		<a class="skip-link button" href="#site-content"><?php _e( 'Skip to the content', 'fukasawa' ); ?></a>
	
		<div class="mobile-navigation">
	
			<ul class="mobile-menu">
						
				<?php 
				if ( has_nav_menu( 'primary' ) ) {

					$nav_args = array( 
						'container' 		=> '', 
						'echo'				=> false,
						'items_wrap' 		=> '%3$s',
						'theme_location' 	=> 'primary'
					);
																	
					$primary_nav = wp_nav_menu( $nav_args );

					echo $primary_nav;

				} else {

					$list_pages_args = array(
						'container' => '',
						'echo'		=> false,
						'title_li' 	=> ''
					);

					$pages_list = wp_list_pages( $list_pages_args );

					echo $pages_list;
					
				} 
				?>
				
			 </ul>
		 
		</div><!-- .mobile-navigation -->
	
		<div class="sidebar">
		
			<?php if ( get_theme_mod( 'fukasawa_logo' ) ) : ?>
			
		        <a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
		        	<img src='<?php echo esc_url( get_theme_mod( 'fukasawa_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
		        </a>
		
			<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : 
				
				// h1 on singular, h2 elsewhere
				$title_type = is_singular() ? 'h2' : 'h1'; ?>
		
				<<?php echo $title_type; ?> class="blog-title">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
				</<?php echo $title_type; ?>>
				
			<?php endif; ?>
			
			<button type="button" class="nav-toggle hidden" title="<?php _e( 'Click to view the navigation', 'fukasawa' ); ?>">
			
				<div class="bars">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
				
				<p>
					<span class="menu"><?php _e( 'Menu', 'fukasawa' ); ?></span>
					<span class="close"><?php _e( 'Close', 'fukasawa' ); ?></span>
				</p>
			
			</button>
			
				<ul class="main-menu">

					<?php 
					if ( isset( $primary_nav ) ) {
						echo $primary_nav;
					} else {
						echo $pages_list;
					} 
					?>

				</ul>

				<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

					<div class="widgets">

						<?php dynamic_sidebar( 'sidebar' ); ?>

					</div>

				<?php endif; ?>

				<div class="credits">

					<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.</p>
					<p><?php _e( 'Powered by', 'fukasawa' ); ?> <a href="https://www.wordpress.org">WordPress</a>.</p>
					<p><?php _e( 'Theme by', 'fukasawa' ); ?> <a href="https://www.andersnoren.se">Anders Nor&eacute;n</a>.</p>

				</div>

				<div class="clear"></div>
							
		</div><!-- .sidebar -->
	
		<main class="wrapper" id="site-content">