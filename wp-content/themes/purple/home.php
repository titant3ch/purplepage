<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php while ( have_posts() ) : the_post() ?>
<?php the_content(); ?>

<?php endwhile; ?>


<?php get_footer(); ?>