<?php get_header(); ?>
<section id="content" role="main">


<!-- <h6 class="entry-title"><?php single_cat_title(); ?></h6>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?> -->


<div class="meta">this is "Thought" the AGBO DIGITAL blog.</div>
<!--more-->


<div class="project_title">"thought"</div>

<div class="h2_centered project_subtitle">News, thoughts, ideas, and perspectives within tech, design, marketing, and digital innovation.</div>


<img class="center_imgs title_arrows" src="http://agbo-digital.com/wp-content/themes/blankslate/imgs/universal/down_arrow.png"/>



<div id="blog_categories">
	<table class="blog_nav">
		<tr>
			<td><a href="#"><div class="blog_category">News</div></a></td>
			<td><a href="#"><div class="blog_category">Perspective</div></a></td>
			<td><a href="#"><div class="blog_category">Art/Design</div></a></td>
			<td><a href="#"><div class="blog_category">Marketing</div></a></td>
			<td><a href="#"><div class="blog_category">Ideas</div></a></td>
			<td class="last"><a href="#"><div class="blog_category">Digital Innovation</div></a></td>
		</tr>
	</table>
</div>



<div id="blog-entries-container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink () ?>">
			<?php get_template_part( 'entry' ); ?>
			</a>
	<?php endwhile; endif; ?>
</div>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_footer(); ?>