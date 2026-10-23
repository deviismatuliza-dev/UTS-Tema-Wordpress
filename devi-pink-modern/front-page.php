<?php get_header(); ?>
<header class="hero">
    <div class="hero-content">
        <div class="hero-badge">Welcome to My Website</div>
        <h1>Devi Ismatul Izzah</h1>
        <p class="hero-subtitle">Mahasiswa Pendidikan Informatika</p>
        <p class="hero-description">Selamat datang di website pribadi saya. Website ini menjadi media untuk berbagi informasi, artikel, dan karya di bidang teknologi serta pendidikan informatika.</p>
        <div class="hero-buttons">
            <a href="#profil" class="hero-button">Lihat Profil →</a>
            <a href="#artikel" class="hero-button secondary-button">Lihat Artikel</a>
        </div>
    </div>
    <div class="hero-circle circle-one"></div><div class="hero-circle circle-two"></div><div class="hero-heart" aria-hidden="true">♡</div>
</header>
<section class="profile-section" id="profil">
    <div class="section-title"><span>MY PROFILE</span><h2>Tentang Saya</h2><p>Informasi singkat mengenai diri saya.</p></div>
    <div class="profile-card">
        <div class="profile-avatar" aria-hidden="true">DI</div>
        <div class="profile-info"><h2>Devi Ismatul Izzah</h2><p class="profile-role">Mahasiswa Pendidikan Informatika</p>
            <div class="profile-details">
                <div class="detail-item"><div class="detail-icon" aria-hidden="true">🎓</div><div><span>NIM</span><strong>240631100004</strong></div></div>
                <div class="detail-item"><div class="detail-icon" aria-hidden="true">💻</div><div><span>Program Studi</span><strong>Pendidikan Informatika</strong></div></div>
                <div class="detail-item"><div class="detail-icon" aria-hidden="true">🌸</div><div><span>Fokus</span><strong>Teknologi dan Pendidikan</strong></div></div>
            </div>
        </div>
    </div>
</section>
<main class="content" id="artikel">
    <div class="section-title"><span>MY BLOG</span><h2>Artikel Terbaru</h2><p>Berbagai tulisan dan informasi yang tersedia di website saya.</p></div>
    <div class="post-grid">
    <?php $devi_latest = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 6, 'post_status' => 'publish' ) ); ?>
    <?php if ( $devi_latest->have_posts() ) : while ( $devi_latest->have_posts() ) : $devi_latest->the_post(); ?>
        <article <?php post_class( 'post-card' ); ?>>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>" aria-label="Baca <?php the_title_attribute(); ?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } else { echo '<span class="no-image">🌸</span>'; } ?>
                </a>
            </div>
            <div class="post-content"><div class="post-date"><?php echo esc_html( get_the_date() ); ?></div><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p><a href="<?php the_permalink(); ?>" class="read-more">Baca Selengkapnya →</a></div>
        </article>
    <?php endwhile; wp_reset_postdata(); else : ?>
        <div class="no-post"><div class="no-post-icon">🌷</div><h2>Belum Ada Artikel</h2><p>Silakan tambahkan artikel melalui dashboard WordPress.</p></div>
    <?php endif; ?>
    </div>
    <p class="all-posts-link"><a class="hero-button" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/?post_type=post' ) ); ?>">Lihat Semua Artikel →</a></p>
</main>
<section class="contact-section" id="kontak"><div class="contact-box"><div class="contact-content"><span>GET IN TOUCH</span><h2>Hubungi Saya</h2><p>Terima kasih sudah berkunjung ke website pribadi saya.</p></div><div class="contact-card"><div class="contact-icon" aria-hidden="true">✉</div><div><small>Informasi</small><h3>Pendidikan Informatika</h3></div></div></div></section>
<?php get_footer(); ?>
