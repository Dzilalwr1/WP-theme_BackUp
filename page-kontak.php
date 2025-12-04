<?php
get_header(); 
?>

<section id="kontak">
    <h2>Kontak & Lokasi</h2>
    <div class="grid-container contact-layout">
        <div class="contact-map">
            <h3>Lokasi Kami</h3>
            <p><?php echo esc_html(get_theme_mod('kontak_alamat', 'Jl. Kadrie Oening No.66, Air Hitam, Samarinda.')); ?></p>
            <div class="google-maps-container">
            <?php 
                $maps_embed = get_theme_mod('kontak_maps_embed');
                if (!empty($maps_embed)) {
                    echo $maps_embed;
                } else {
                    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.671048601815!2d117.1357543152778!3d-0.4851259996504245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f3333333333%3A0x33b8f2d5568a1f86!2sExca%20Coffee!5e0!3m2!1sen!2sid!4v1694080123456!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                }
            ?>
            </div>
            </div>
        <div class="contact-info">
            <h3>Hubungi Kami</h3>
            <p><strong>Telepon:</strong> <?php echo esc_html(get_theme_mod('kontak_telepon', '0812-3456-7890')); ?></p>
            <p><strong>Jam Buka:</strong> <?php echo esc_html(get_theme_mod('kontak_jam_buka', '09:00 - 23:00 WITA')); ?></p>
            <p><strong>Media Sosial:</strong> <a href="https://www.instagram.com/exca.coffee/" target="_blank" rel="noopener noreferrer">Instagram @excacoffee</a></p>
            <a href="https://gofood.co.id/samarinda/restaurant/exca-coffee-samarinda-70325371-ccca-4daa-9e64-9abe850834eb" target="_blank" rel="noopener noreferrer" class="cta-button primary-cta" style="margin-top: 15px;">Order Here</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>