<?php get_header();?>
<?php 	
if(have_posts()){
	while(have_posts()){
		the_post();
		?>
		<article class='archive'>	
				<h2 class='archive_h2' >	
						<a class = 'archive_a'href=" <?php 	the_permalink(); ?>"><?php 	the_title(); ?></a> 
				</h2>
				<?php the_post_thumbnail('new-image'); ?>
				<p class = 'archive_p'>
					<?= get_the_excerpt(); ?>
					<a href="<?php the_permalink();?>">Read more&raquo</a>
				</p>

		</article>
		<hr>
<?php }
 }
 ?>
<?php get_footer(); ?>