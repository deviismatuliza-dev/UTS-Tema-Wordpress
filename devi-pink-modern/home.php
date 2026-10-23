<?php get_header(); ?>
<main class="content archive-layout">
    <div class="section-title"><span>MY BLOG</span><h1><?php echo esc_html( get_the_title( get_option( 'page_for_posts' ) ) ?: 'Artikel' ); ?></h1><p>Kumpulan artikel terbaru.</p></div>
    <div class="content-with-sidebar"><div class="post-grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'post-card' ); ?>><div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } else { echo '<span class="no-image">🌸</span>'; } ?></a></div><div class="post-content"><div class="post-date"><?php echo esc_html( get_the_date() ); ?></div><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p><a class="read-more" href="<?php the_permalink(); ?>">Baca Selengkapnya →</a></div></article>
    <?php endwhile; the_posts_pagination( array( 'prev_text' => '← Sebelumnya', 'next_text' => 'Berikutnya →' ) ); else : ?><div class="no-post"><h2>Belum Ada Artikel</h2><p>Silakan tambahkan artikel melalui dashboard WordPress.</p></div><?php endif; ?>
    </div><?php get_sidebar(); ?></div>
</main>
<?php get_footer(); ?>
