<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="pagina">

	<section class="container" id="singular">

		<h1><?php the_title(); ?></h1>
		
		<?php while ( have_posts() ) : the_post() ?>
		<?php the_content(); ?>
		
		<?php endwhile; ?>

	</section>

</div>

<?php get_footer(); ?>