<div id="main">
	<div class="row">
		<div class="col-sm-8">
			<h2 class="blog-post-title"><?php the_title(); ?></h2>
			<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>

			<?php the_content(); ?>
		</div>
		<div class="col-sm-3 col-sm-offset-1">
			<?php get_sidebar(); ?>
		</div>

</div><!-- /.blog-post -->