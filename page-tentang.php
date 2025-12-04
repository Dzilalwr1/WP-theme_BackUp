<?php
get_header(); 

// Background
$bg_image = get_theme_mod('tentang_bg_image', get_template_directory_uri() . '/assets/images/about-bg.jpg');
?>

<div class="about-page-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    
    <div class="about-overlay">
        <div class="container-page" style="max-width: 1000px; margin: 0 auto;">

            <div class="about-block glass-effect">
                <h1 class="page-title">TENTANG KAMI</h1>
                <div class="about-story-content">
                    <?php
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>

            <div class="about-block glass-effect">
                <h2 class="section-title">TIM KAMI</h2>
                <div class="team-list-container">
                    <?php 
                    for ($i = 1; $i <= 10; $i++) :
                        $nama = get_theme_mod("tim_member_{$i}_nama");
                        $role = get_theme_mod("tim_member_{$i}_role");
                        $nim  = get_theme_mod("tim_member_{$i}_nim");
                        $foto = get_theme_mod("tim_member_{$i}_foto", get_template_directory_uri() . '/assets/images/team-placeholder.jpg');

                        if (!empty($nama)) :
                    ?>
                        <div class="team-card-row">
                            <div class="team-photo">
                                <img src="<?php echo esc_url($foto); ?>" alt="<?php echo esc_attr($nama); ?>">
                            </div>
                            <div class="team-info">
                                <h3><?php echo esc_html($nama); ?></h3>
                                <p class="role"><?php echo esc_html($role); ?></p>
                                <?php if (!empty($nim)) : ?>
                                    <p class="nim"><?php echo esc_html($nim); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php 
                        endif;
                    endfor; 
                    ?>
                </div>
            </div>

            <div class="about-block glass-effect">
                <h2 class="section-title">LOKASI KAMI</h2>
                <div class="maps-wrapper">
                    <?php 
                    $maps_embed = get_theme_mod('kontak_maps_embed');
                    if (!empty($maps_embed)) {
                        // Paksa width 100%
                        echo str_replace('width="600"', 'width="100%"', $maps_embed);
                    } else {
                        echo '<p style="text-align:center;">Peta belum diatur di Customizer.</p>';
                    }
                    ?>
                </div>
                
                <div class="address-text" style="text-align: center; margin-top: 20px;">
                    <p><?php echo nl2br(esc_html(get_theme_mod('kontak_alamat', 'Jl. Contoh No. 123, Samarinda'))); ?></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>