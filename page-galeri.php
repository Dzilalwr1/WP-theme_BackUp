<?php
/*
Template Name: Halaman Galeri
*/
get_header(); 

// Kita ambil gambar untuk header dari customizer (atau pakai default)
$header_bg = get_theme_mod('galeri_header_bg', get_template_directory_uri() . '/assets/images/gallery-bg.jpg');
?>

<div class="gallery-hero-header" style="background-image: url('<?php echo esc_url($header_bg); ?>');">
    <div class="hero-overlay">
        <div class="hero-content">
            <span class="hero-tag">PORTFOLIO</span>
            <h1>Captured Moments</h1>
            <p>Setiap sudut Exca Coffee punya ceritanya sendiri.</p>
        </div>
    </div>
</div>

<section id="galeri-content">
    <div class="container-page" style="max-width: 1200px; margin: 0 auto;">

        <div class="masonry-container">
            <?php 
            for ($i = 1; $i <= 12; $i++) : 
                $gambar = get_theme_mod("galeri_gambar_{$i}"); // Sesuai functions.php Anda
                
                if (!empty($gambar)) : 
            ?>
                <div class="masonry-item">
                    <div class="masonry-card">
                        <img src="<?php echo esc_url($gambar); ?>" alt="Exca Moment" class="lightbox-trigger" loading="lazy">
                        <div class="masonry-hover">
                            <span class="icon-eye">👁️</span>
                        </div>
                    </div>
                </div>
            <?php 
                endif; 
            endfor; 
            ?>
        </div>

        <div class="gallery-video-section">
            <div class="section-divider">
                <span class="dot"></span>
                <span class="text">VIDEO PROFIL</span>
                <span class="dot"></span>
            </div>
            
            <?php 
            $video_embed = get_theme_mod('galeri_video_embed');
            if (!empty($video_embed)) : 
            ?>
                <div class="video-cinema-box">
                    <div class="video-inner">
                        <?php echo $video_embed; ?>
                    </div>
                </div>
            <?php else : ?>
                <p style="text-align: center; color: #999; font-style: italic;">Video coming soon.</p>
            <?php endif; ?>
        </div>

    </div>
</section>

<style>
    /* --- 1. HERO HEADER (PARALLAX) --- */
    .gallery-hero-header {
        position: relative;
        height: 400px; /* Tinggi Header */
        background-size: cover;
        background-position: center;
        background-attachment: fixed; /* KUNCI: Efek Parallax */
        display: flex; align-items: center; justify-content: center;
        text-align: center; color: #fff;
    }
    
    .hero-overlay {
        position: absolute; top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0,0,0,0.6); /* Gelapkan gambar background */
        display: flex; align-items: center; justify-content: center;
    }
    
    .hero-content h1 {
        font-size: 3.5rem; margin: 10px 0; font-weight: 800; letter-spacing: 1px;
        text-shadow: 0 5px 15px rgba(0,0,0,0.5);
    }
    
    .hero-tag {
        background: var(--brown, #d4a373); padding: 5px 15px; border-radius: 50px;
        font-size: 0.8rem; font-weight: bold; letter-spacing: 3px; text-transform: uppercase;
    }
    
    .hero-content p { font-size: 1.2rem; opacity: 0.9; font-style: italic; }

    /* --- 2. BACKGROUND GALERI (WARM) --- */
    #galeri-content {
        padding: 60px 20px;
        /* Warna Background: Krem/Abu Hangat (Bukan putih polos) */
        background-color: #fdfbf7; 
        background-image: radial-gradient(#e0deda 1px, transparent 1px); /* Pola titik halus */
        background-size: 20px 20px; /* Ukuran pola */
    }

    /* --- 3. MASONRY GRID --- */
    .masonry-container {
        column-count: 3; column-gap: 25px;
    }
    
    .masonry-item {
        break-inside: avoid; margin-bottom: 25px;
        animation: fadeUp 0.8s ease backwards;
    }
    
    /* Animasi Delay Berurutan */
    .masonry-item:nth-child(1) { animation-delay: 0.1s; }
    .masonry-item:nth-child(2) { animation-delay: 0.2s; }
    .masonry-item:nth-child(3) { animation-delay: 0.3s; }
    /* dst... */

    .masonry-card {
        position: relative; border-radius: 15px; overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        background: #000; cursor: pointer;
    }

    .masonry-card img {
        width: 100%; height: auto; display: block;
        transition: transform 0.5s, opacity 0.3s;
    }

    /* Efek Hover */
    .masonry-card:hover img { transform: scale(1.1); opacity: 0.7; }
    
    .masonry-hover {
        position: absolute; top: 0; left: 0; right: 0; bottom: 0;
        display: flex; align-items: center; justify-content: center;
        opacity: 0; transition: opacity 0.3s;
    }
    .masonry-card:hover .masonry-hover { opacity: 1; }
    .icon-eye { font-size: 2rem; color: #fff; text-shadow: 0 2px 10px rgba(0,0,0,0.5); }

    /* --- 4. VIDEO --- */
    .gallery-video-section { margin-top: 80px; }
    .section-divider {
        display: flex; align-items: center; justify-content: center; gap: 15px;
        margin-bottom: 40px; color: #888; letter-spacing: 2px; font-weight: bold;
    }
    .section-divider .dot { width: 8px; height: 8px; background: var(--brown, #d4a373); border-radius: 50%; }

    .video-cinema-box {
        max-width: 900px; margin: 0 auto;
        background: #111; padding: 15px; border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.4);
    }
    .video-inner {
        display: flex; justify-content: center; align-items: center;
        background: #000; border-radius: 15px; overflow: hidden; min-height: 400px;
    }
    /* Support Embed Universal */
    .video-inner iframe, .video-inner video { width: 100%; height: 500px; border: none; aspect-ratio: auto; }
    .video-inner blockquote { background: #fff; width: 100%; max-width: 450px; border-radius: 10px; margin: 0 auto; }

    /* ANIMASI */
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* RESPONSIF */
    @media (max-width: 900px) { 
        .masonry-container { column-count: 2; } 
        .hero-content h1 { font-size: 2.5rem; }
    }
    @media (max-width: 600px) { 
        .masonry-container { column-count: 1; } 
        .gallery-hero-header { height: 300px; }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const lightbox = document.getElementById('lightbox-modal');
    const lightboxImg = document.getElementById('lightbox-img');
    const closeBtn = document.querySelector('.close-lightbox');
    const triggers = document.querySelectorAll('.lightbox-trigger');

    if(lightbox){
        triggers.forEach(img => {
            img.addEventListener('click', () => {
                lightbox.style.display = "block";
                lightboxImg.src = img.src;
                document.body.style.overflow = "hidden";
            });
        });
        const closeLightbox = () => {
            lightbox.style.display = "none";
            document.body.style.overflow = "";
        };
        closeBtn.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => {
            if(e.target === lightbox) closeLightbox();
        });
    }
});
</script>

<?php get_footer(); ?>