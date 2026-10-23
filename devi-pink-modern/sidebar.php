<aside class="sidebar" aria-label="Sidebar">
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : dynamic_sidebar( 'sidebar-1' ); else : ?>
<section class="widget"><h3 class="widget-title">Cari Artikel</h3><?php get_search_form(); ?></section>
<section class="widget"><h3 class="widget-title">Artikel Terbaru</h3><ul><?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 6 ) ); ?></ul></section>
<section class="widget"><h3 class="widget-title">Kategori</h3><ul><?php wp_list_categories( array( 'title_li' => '' ) ); ?></ul></section>
<?php endif; ?>
</aside>
