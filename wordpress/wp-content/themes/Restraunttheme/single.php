<?php get_header();?>
<?php the_post(); ?>
<article class='archive'>
	<h2 class='archive_h2'><?php the_title(); ?>
	</h2>
	<?php the_post_thumbnail('image-single') ?>
	<p>
		<?php the_content(); ?>
	</p>
</article>
<?php get_footer(); ?>