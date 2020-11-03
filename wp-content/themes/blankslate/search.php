<?php get_header(); ?>
<section id="content" role="main">

<?php if ( have_posts() ) : ?>
	<h6 class="entry-title"><?php printf( __( 'Search Results for: "%s"', 'blankslate' ), get_search_query() ); ?></h6>
	<header class="header">
	</header>
	<?php while ( have_posts() ) : the_post(); ?>

	<a href="<?php the_permalink () ?>">
	<div class="search-entry-summary">	
	<?php get_template_part( 'entry-content' ); ?>
	</div>
	</a>

	<?php endwhile; ?>
	<?php get_template_part( 'nav', 'below' ); ?>

<?php else : ?>

	<article id="post-0" class="post no-results not-found">
		<section class="entry-content">
		<h6><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></h6>
		</section>
	</article>
<?php endif; ?>
</section>
<?php get_footer(); ?>


