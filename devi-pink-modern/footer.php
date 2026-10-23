<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-profile">
            <h3><?php echo esc_html( get_bloginfo( 'name' ) ?: 'Devi Ismatul Izzah' ); ?></h3>
            <p>Mahasiswa Pendidikan Informatika</p>
            <p>Website pribadi untuk berbagi artikel dan karya.</p>
        </div>
        <div class="footer-links">
            <h4>Menu</h4>
            <?php if ( has_nav_menu( 'footer' ) ) {
                wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'items_wrap' => '%3$s', 'fallback_cb' => false ) );
            } else { ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <a href="<?php echo esc_url( home_url( '/#profil' ) ); ?>">Profil</a>
                <a href="<?php echo esc_url( home_url( '/#artikel' ) ); ?>">Artikel</a>
                <a href="<?php echo esc_url( home_url( '/#kontak' ) ); ?>">Kontak</a>
            <?php } ?>
        </div>
        <div class="footer-contact">
            <h4>Kontak</h4>
            <p>Pendidikan Informatika</p>
            <p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
        </div>
    </div>
    <div class="footer-bottom"><p>© <?php echo esc_html( wp_date( 'Y' ) ); ?> <strong><?php echo esc_html( get_bloginfo( 'name' ) ?: 'Devi Ismatul Izzah' ); ?></strong>. All Rights Reserved.</p></div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
