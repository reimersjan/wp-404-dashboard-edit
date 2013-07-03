<?php
  /*Template Name: Error*/
?>

<?php get_header(); ?>

<?php $recent = new WP_Query("page_id=THEPAGEID"); while($recent->have_posts()) : $recent->the_post();?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>
