<?php
/*
Template Name: Halaman Kontak (Order)
*/
get_header(); 

// Ambil Data dari Customizer
$bg_header  = get_theme_mod('tentang_bg_image', get_template_directory_uri() . '/assets/images/contact-bg.jpg');
$wa         = get_theme_mod('kontak_wa', '628123456789');
$email      = get_theme_mod('kontak_email', 'info@exca.com');
$jam        = get_theme_mod('kontak_jam_buka', 'Setiap Hari: 10.00 - 23.00');
$alamat     = get_theme_mod('kontak_alamat_teks', 'Jl. Belum Diatur No. 123');
$ig_url     = get_theme_mod('kontak_ig_url', '#');
$order_url  = get_theme_mod('kontak_order_url', '#'); // Link Order
?>

<div class="contact-header-simple" style="background-image: url('<?php echo esc_url($bg_header); ?>');">
    <div class="overlay-simple">
        <h1>Hubungi Kami</h1>
        <p>Datang langsung atau pesan dari rumah.</p>
    </div>
</div>

<section id="contact-simple-content">
    <div class="container-page" style="max-width: 1100px; margin: 0 auto;">
        
        <div class="contact-split-layout">
            
            <div class="contact-left">
                <h2 class="contact-heading">Informasi Outlet</h2>
                
                <div class="contact-list">
                    <div class="c-item">
                        <span class="icon">📍</span>
                        <div class="c-text">
                            <strong>Alamat</strong>
                            <p><?php echo nl2br(esc_html($alamat)); ?></p>
                        </div>
                    </div>

                    <div class="c-item">
                        <span class="icon">⏰</span>
                        <div class="c-text">
                            <strong>Jam Operasional</strong>
                            <p><?php echo nl2br(esc_html($jam)); ?></p>
                        </div>
                    </div>

                    <div class="c-item">
                        <span class="icon">📞</span>
                        <div class="c-text">
                            <strong>Telepon / WhatsApp</strong>
                            <p>+<?php echo esc_html($wa); ?></p>
                        </div>
                    </div>

                    <div class="c-item">
                        <span class="icon">📷</span>
                        <div class="c-text">
                            <strong>Social Media</strong>
                            <p><a href="<?php echo esc_url($ig_url); ?>" target="_blank" style="color: var(--brown); font-weight: bold;">Instagram &rarr;</a></p>
                        </div>
                    </div>
                </div>

                <div class="simple-map">
                    <?php 
                    $maps_embed = get_theme_mod('kontak_maps_embed');
                    if (!empty($maps_embed)) {
                        echo preg_replace('/(width|height)="\d+"/', '', $maps_embed);
                    } else {
                        echo '<div class="map-placeholder">Peta belum diatur.</div>';
                    }
                    ?>
                </div>
            </div>

            <div class="contact-right">
                <div class="order-box-sticky">
                    <h3>Mager Keluar Rumah?</h3>
                    <p>Nikmati kopi favoritmu tanpa harus antri. Pesan sekarang melalui aplikasi partner kami.</p>
                    
                    <div class="order-actions">
                        <a href="<?php echo esc_url($order_url); ?>" target="blank" class="btn-order-big">
                            🛵 PESAN VIA GOFOOD
                        </a>
                        
                        <div class="separator-text">ATAU</div>

                        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" target="blank" class="btn-wa-outline">
                            💬 CHAT WHATSAPP
                        </a>
                    </div>

                    <div class="mini-note">
                        *Harga di aplikasi mungkin berbeda dengan dine-in.
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>