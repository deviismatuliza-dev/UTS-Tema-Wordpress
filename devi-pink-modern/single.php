<?php get_header(); ?>
<main class="content single-layout"><div class="content-with-sidebar"><div class="single-main">
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class( 'single-article' ); ?>><div class="post-date"><?php echo esc_html( get_the_date() ); ?> · <?php the_category( ', ' ); ?></div><h1 class="single-title"><?php the_title(); ?></h1>
<?php if ( has_post_thumbnail() ) : ?><div class="single-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
<div class="entry-content"><?php the_content(); wp_link_pages(); ?></div>
<div class="post-tags"><?php the_tags( '<span>Tag: </span>', ', ' ); ?></div>
</article>
<nav class="post-navigation" aria-label="Navigasi artikel"><div><?php previous_post_link( '%link', '← %title' ); ?></div><div><?php next_post_link( '%link', '%title →' ); ?></div></nav>
<?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
<?php endwhile; ?></div><?php get_sidebar(); ?></div></main>
<?php get_footer(); ?>
