<?php get_header(); ?>

<?php 
// Bagian Hero (Hero)
$hero_bg_url = get_theme_mod('beranda_bg', get_template_directory_uri() . '/assets/images/hero-bg.jpg');
?>
<section id="beranda" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo esc_url($hero_bg_url); ?>');">
    <div class="hero-content">
        <h2><?php echo esc_html(get_theme_mod('beranda_judul', 'Grind The Essentials.')); ?></h2>
        <p><?php echo nl2br(esc_html(get_theme_mod('beranda_subjudul', 'Kopi pilihan untuk pengalaman minum terbaik setiap hari.'))); ?></p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url( home_url( '/menu' ) ); ?>" class="cta-button primary-cta">LIHAT MENU</a>
            <a href="<?php echo esc_url( home_url( '/kontak' ) ); ?>" class="cta-button secondary-cta">KUNJUNGI KAMI</a>
        </div>
    </div>
</section>

<section id="about-singkat" style="padding: 80px 20px; background-color: #f9f9f9;">
    <div class="about-layout-left">
        
        <div class="about-image-side">
            <img src="<?php echo esc_url(get_theme_mod('about_singkat_gambar', get_template_directory_uri() . '/assets/images/about-img.jpg')); ?>" alt="Tentang Kami">
        </div>
        
        <div class="about-text-side">
            <span class="about-label">OUR STORY</span>
            <h2><?php echo esc_html(get_theme_mod('about_singkat_judul', 'Cerita Kami')); ?></h2>
            
            <p><?php echo nl2br(esc_html(get_theme_mod('about_singkat_deskripsi', 'Exca Coffee hadir untuk menyajikan kopi terbaik...'))); ?></p>
            
            <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="cta-button primary-cta">SELENGKAPNYA ></a>
        </div>

    </div>
</section>

<section id="menu">
    <h2>Menu Andalan Kami</h2>
    <div class="grid-container">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            $judul = get_theme_mod("menu_item_{$i}_judul");
            if (!empty($judul)) {
                $gambar = get_theme_mod("menu_item_{$i}_gambar");
                $deskripsi = get_theme_mod("menu_item_{$i}_deskripsi");
                ?>
                <div class="card">
                    <?php if (!empty($gambar)) : ?>
                        <img src="<?php echo esc_url($gambar); ?>" alt="<?php echo esc_attr($judul); ?>">
                    <?php endif; ?>
                    <h3><?php echo esc_html($judul); ?></h3>
                    <p><?php echo esc_html($deskripsi); ?></p>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="section-cta">
        <a href="<?php echo esc_url( home_url( '/menu' ) ); ?>" class="cta-button primary-cta">Lihat Menu</a>
    </div>
</section>

<section id="promo-spesial" style="padding: 80px 20px; background-color: #fff;">
    <div class="promo-layout-right">
        
        <?php 
        $promo_img = get_theme_mod('promo_gambar');
        $judul_promo = get_theme_mod('promo_judul', 'Diskon Spesial');
        $deskripsi_promo = get_theme_mod('promo_deskripsi', 'Dapatkan penawaran menarik hari ini.');
        
        // Cek gambar
        if ( !empty($promo_img) ) : 
        ?>
            <div class="promo-text-side">
                <span class="promo-label">SPESIAL OFFER</span>
                <h3><?php echo esc_html($judul_promo); ?></h3>
                <p><?php echo nl2br(esc_html($deskripsi_promo)); ?></p>
            </div>

            <div class="promo-image-side">
                <img src="<?php echo esc_url($promo_img); ?>" alt="<?php echo esc_attr($judul_promo); ?>">
            </div>

        <?php else : ?>
            
            <div class="promo-fallback-box" style="margin: 0 auto; text-align: center;">
                <h3>☕ Quotes of the Day</h3>
                <p>"Hidup itu seperti kopi, yang pahit pun bisa dinikmati."</p>
                <a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>" class="cta-button primary-cta" style="margin-top: 20px;">PESAN SEKARANG</a>
            </div>

        <?php endif; ?>

    </div>
</section>

<section id="testimoni-pelanggan" style="text-align: center; padding: 60px 20px;">
    <h2>Apa Kata Mereka?</h2>
    <p style="margin-bottom: 30px;">Ulasan asli dari pelanggan kami.</p>
    
    <div class="google-reviews-container" style="max-width: 1200px; margin: 0 auto;">
        <?php 
        
        echo do_shortcode('[trustindex no-registration=google]'); 
        ?>
    </div>
</section>


<?php get_footer(); ?>