<?php

/*
Template Name: Halaman Menu
*/

get_header(); 
?>

<section id="menu-list-page" style="padding: 60px 20px; background-color: #fff;">
    <div class="container-page" style="max-width: 1100px; margin: 0 auto;">
        
        <h2 style="text-align: left; margin-bottom: 50px; font-size: 2.5rem; letter-spacing: 2px; color: #333; border-bottom: 4px solid #000; display: inline-block; padding-bottom: 10px;">DAFTAR MENU</h2>

        <div class="menu-layout-split">
            
            <div class="menu-column left-side">
                
                <div class="menu-category-group">
                    <h3 class="exca-category-title"><?php echo esc_html(get_theme_mod('judul_kiri_1', 'Exca Signature Series')); ?></h3>
                    <div class="menu-items-list">
                        <?php for ($i = 1; $i <= 30; $i++) : 
                            $nama = get_theme_mod("kiri1_item_{$i}_nama");
                            $harga = get_theme_mod("kiri1_item_{$i}_harga");
                            if (!empty($nama)) : ?>
                                <div class="exca-menu-item">
                                    <span class="name"><?php echo esc_html($nama); ?></span>
                                    <span class="dots"></span>
                                    <span class="price"><?php echo esc_html($harga); ?></span>
                                </div>
                        <?php endif; endfor; ?>
                    </div>
                </div>
                <div style="height: 30px;"></div>

                <div class="menu-category-group">
                    <h3 class="exca-category-title"><?php echo esc_html(get_theme_mod('judul_kiri_2', 'Coffee Series')); ?></h3>
                    <div class="menu-items-list">
                        <?php for ($i = 1; $i <= 30; $i++) : 
                            $nama = get_theme_mod("kiri2_item_{$i}_nama");
                            $harga = get_theme_mod("kiri2_item_{$i}_harga");
                            if (!empty($nama)) : ?>
                                <div class="exca-menu-item">
                                    <span class="name"><?php echo esc_html($nama); ?></span>
                                    <span class="dots"></span>
                                    <span class="price"><?php echo esc_html($harga); ?></span>
                                </div>
                        <?php endif; endfor; ?>
                    </div>
                </div>
                <div style="height: 30px;"></div>

                <div class="menu-category-group">
                    <h3 class="exca-category-title"><?php echo esc_html(get_theme_mod('judul_kiri_3', 'Manual Brew Series')); ?></h3>
                    <div class="menu-items-list">
                        <?php for ($i = 1; $i <= 30; $i++) : 
                            $nama = get_theme_mod("kiri3_item_{$i}_nama");
                            $harga = get_theme_mod("kiri3_item_{$i}_harga");
                            if (!empty($nama)) : ?>
                                <div class="exca-menu-item">
                                    <span class="name"><?php echo esc_html($nama); ?></span>
                                    <span class="dots"></span>
                                    <span class="price"><?php echo esc_html($harga); ?></span>
                                </div>
                        <?php endif; endfor; ?>
                    </div>
                </div>
                <div style="height: 30px;"></div>

                <div class="menu-category-group">
                    <h3 class="exca-category-title"><?php echo esc_html(get_theme_mod('judul_kiri_4', 'Milk Shake Series')); ?></h3>
                    <div class="menu-items-list">
                        <?php for ($i = 1; $i <= 30; $i++) : 
                            $nama = get_theme_mod("kiri4_item_{$i}_nama");
                            $harga = get_theme_mod("kiri4_item_{$i}_harga");
                            if (!empty($nama)) : ?>
                                <div class="exca-menu-item">
                                    <span class="name"><?php echo esc_html($nama); ?></span>
                                    <span class="dots"></span>
                                    <span class="price"><?php echo esc_html($harga); ?></span>
                                </div>
                        <?php endif; endfor; ?>
                    </div>
                </div>

            </div> <div class="menu-column right-side">
                
                <div class="menu-category-group">
                    <h3 class="exca-category-title"><?php echo esc_html(get_theme_mod('judul_kanan_1', 'Non Coffee Series')); ?></h3>
                    <div class="menu-items-list">
                        <?php for ($i = 1; $i <= 30; $i++) : 
                            $nama = get_theme_mod("kanan1_item_{$i}_nama");
                            $harga = get_theme_mod("kanan1_item_{$i}_harga");
                            if (!empty($nama)) : ?>
                                <div class="exca-menu-item">
                                    <span class="name"><?php echo esc_html($nama); ?></span>
                                    <span class="dots"></span>
                                    <span class="price"><?php echo esc_html($harga); ?></span>
                                </div>
                        <?php endif; endfor; ?>
                    </div>
                </div>
                <div style="height: 30px;"></div>

                <div class="menu-category-group">
                    <h3 class="exca-category-title"><?php echo esc_html(get_theme_mod('judul_kanan_2', 'Tea Series')); ?></h3>
                    <div class="menu-items-list">
                        <?php for ($i = 1; $i <= 30; $i++) : 
                            $nama = get_theme_mod("kanan2_item_{$i}_nama");
                            $harga = get_theme_mod("kanan2_item_{$i}_harga");
                            if (!empty($nama)) : ?>
                                <div class="exca-menu-item">
                                    <span class="name"><?php echo esc_html($nama); ?></span>
                                    <span class="dots"></span>
                                    <span class="price"><?php echo esc_html($harga); ?></span>
                                </div>
                        <?php endif; endfor; ?>
                    </div>
                </div>
                <div style="height: 30px;"></div>

                <div class="menu-category-group">
                    <h3 class="exca-category-title"><?php echo esc_html(get_theme_mod('judul_kanan_3', 'Mocktail')); ?></h3>
                    <div class="menu-items-list">
                        <?php for ($i = 1; $i <= 30; $i++) : 
                            $nama = get_theme_mod("kanan3_item_{$i}_nama");
                            $harga = get_theme_mod("kanan3_item_{$i}_harga");
                            if (!empty($nama)) : ?>
                                <div class="exca-menu-item">
                                    <span class="name"><?php echo esc_html($nama); ?></span>
                                    <span class="dots"></span>
                                    <span class="price"><?php echo esc_html($harga); ?></span>
                                </div>
                        <?php endif; endfor; ?>
                    </div>
                </div>
                <div style="height: 30px;"></div>

                <div class="menu-category-group">
                    <h3 class="exca-category-title"><?php echo esc_html(get_theme_mod('judul_kanan_4', 'Foods')); ?></h3>
                    <div class="menu-items-list">
                        <?php for ($i = 1; $i <= 30; $i++) : 
                            $nama = get_theme_mod("kanan4_item_{$i}_nama");
                            $harga = get_theme_mod("kanan4_item_{$i}_harga");
                            if (!empty($nama)) : ?>
                                <div class="exca-menu-item">
                                    <span class="name"><?php echo esc_html($nama); ?></span>
                                    <span class="dots"></span>
                                    <span class="price"><?php echo esc_html($harga); ?></span>
                                </div>
                        <?php endif; endfor; ?>
                    </div>
                </div>
                <div style="height: 30px;"></div>

                <div class="menu-category-group">
                    <h3 class="exca-category-title"><?php echo esc_html(get_theme_mod('judul_kanan_5', 'Snack')); ?></h3>
                    <div class="menu-items-list">
                        <?php for ($i = 1; $i <= 30; $i++) : 
                            $nama = get_theme_mod("kanan5_item_{$i}_nama");
                            $harga = get_theme_mod("kanan5_item_{$i}_harga");
                            if (!empty($nama)) : ?>
                                <div class="exca-menu-item">
                                    <span class="name"><?php echo esc_html($nama); ?></span>
                                    <span class="dots"></span>
                                    <span class="price"><?php echo esc_html($harga); ?></span>
                                </div>
                        <?php endif; endfor; ?>
                    </div>
                </div>

            </div> </div> </div>
</section>

<?php get_footer(); ?>