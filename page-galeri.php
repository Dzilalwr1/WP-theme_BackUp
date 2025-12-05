<?php
get_header(); 
?>

<section id="galeri" style="padding: 60px 20px;">
    
    <h2 style="text-align: center; margin-bottom: 40px;">Suasana Kafe Kami</h2>
    
    <div class="grid-container gallery-grid">
        <?php for ($i = 1; $i <= 12; $i++) : 
            $gambar = get_theme_mod("galeri_gambar_{$i}");
            
            if (!empty($gambar)) : 
        ?>
            <div class="card gallery-item" style="margin-bottom: 20px;">
                <img src="<?php echo esc_url($gambar); ?>" alt="Suasana Exca Coffee <?php echo $i; ?>" style="width: 100%; height: auto; border-radius: 10px;">
            </div>
        <?php 
            endif; 
        endfor; 
        ?>
    </div>

    <div class="gallery-video" style="margin-top: 60px;">
        <h3 style="text-align: center; margin-bottom: 20px;">Video Kami</h3>
        
        <?php 
        $video_embed = get_theme_mod('galeri_video_embed');
        
        if (!empty($video_embed)) : 
        ?>
            <div class="video-showcase-wrapper">
                <div class="video-content-box">
                    <?php 
                    echo $video_embed; 
                    ?>
                </div>
            </div>

        <?php else : ?>
            <div style="text-align: center; padding: 40px; background: #eee; border-radius: 10px;">
                <p>Video akan segera hadir.</p>
            </div>
        <?php endif; ?>
    </div>

</section>

<style>
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        /* --- TAMBAHAN PENTING AGAR GRID RATA TENGAH --- */
        justify-content: center; 
    }
    .gallery-item {
        width: 100% !important;
        margin-bottom: 0 !important;
    }
</style>

<?php get_footer(); ?>