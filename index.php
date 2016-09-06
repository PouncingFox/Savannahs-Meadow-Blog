<?php get_header(); ?>
	<div id="main" class="row">
		<div class="col-sm-4 blog-main">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; endif; ?>
			
				
		</div>
		<div class="col-sm-4 blog-main">
			<?php 
				$args = array( 'post_type' => 'movies', 'posts_per_page' => 10 );
				$first_query = new WP_Query( $args ); 
				?>
				<?php while ( $first_query->have_posts() ) : $first_query->the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; 
			wp_reset_postdata();
			?>
		</div>
		<?php get_sidebar(); ?>
	</div> 	<!-- /.row -->
<?php get_footer(); ?>