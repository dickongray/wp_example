<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>


<div id="frontpagepostpull">
<?php $temp_query = $wp_query; ?> 
<?php query_posts('showposts=1'); ?>
<?php while (have_posts()) : the_post(); ?> 
	<div class="post" id="post-<?php the_ID(); ?>"> 
	<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4> 
<?php the_post_thumbnail('front-page-post-thumbnail'); ?>  <?php the_excerpt(); ?> 
	</div> 
<?php endwhile; ?> 
</div>



			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>