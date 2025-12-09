<?php

function excacoffee_enqueue_styles() {
    wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(), array(), time() );
}
add_action( 'wp_enqueue_scripts', 'excacoffee_enqueue_styles' );

function excacoffee_enqueue_scripts() {
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'excacoffee_enqueue_scripts' );

function excacoffee_register_menus() {
    register_nav_menus( array( 'primary-menu' => __( 'Primary Menu', 'excacoffee' ) ) );
}
add_action( 'init', 'excacoffee_register_menus' );

// Custom Logo
function excacoffee_theme_support() {
    add_theme_support( 'custom-logo', array(
        'height'      => 40,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'excacoffee_theme_support' );

function excacoffee_customize_register( $wp_customize ) {

    // 1. BUAT PANEL UTAMA
    $wp_customize->add_panel( 'pengaturan_depan', array(
        'title'    => __( 'Web Setting (Exca Coffee)', 'excacoffee' ),
        'priority' => 10,
    ) );

    // 2. BAGIAN BERANDA (HERO)
    $wp_customize->add_section( 'beranda_section', array( 'title' => __( 'Bagian Beranda (Hero)', 'excacoffee' ), 'panel' => 'pengaturan_depan' ) );
    $wp_customize->add_setting( 'beranda_bg', array( 'default' => get_template_directory_uri() . '/assets/images/hero-bg.jpg' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'beranda_bg', array( 'label' => 'Gambar Latar Belakang', 'section' => 'beranda_section' ) ) );
    $wp_customize->add_setting( 'beranda_judul', array( 'default' => 'Grind The Essentials.' ) );
    $wp_customize->add_control( 'beranda_judul', array( 'label' => 'Judul Hero', 'section' => 'beranda_section' ) );
    $wp_customize->add_setting( 'beranda_subjudul', array( 'default' => 'Kopi pilihan untuk pengalaman minum terbaik setiap hari.' ) );
    $wp_customize->add_control( 'beranda_subjudul', array( 'label' => 'Sub-Judul Hero', 'section' => 'beranda_section', 'type' => 'textarea' ) );

    // 3. BAGIAN ABOUT SINGKAT (LANDING PAGE)
    $wp_customize->add_section( 'about_singkat_section', array( 'title' => __( 'Bagian About Singkat (LP)', 'excacoffee' ), 'panel' => 'pengaturan_depan' ) );
    $wp_customize->add_setting( 'about_singkat_gambar', array( 'default' => get_template_directory_uri() . '/assets/images/about-image.jpg' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_singkat_gambar', array( 'label' => 'Gambar About', 'section' => 'about_singkat_section' ) ) );
    $wp_customize->add_setting( 'about_singkat_judul', array( 'default' => 'Tentang Exca Coffee' ) );
    $wp_customize->add_control( 'about_singkat_judul', array( 'label' => 'Judul Bagian', 'section' => 'about_singkat_section' ) );
    $wp_customize->add_setting( 'about_singkat_teks', array( 'default' => 'Berawal dari hasrat mendalam terhadap kopi berkualitas, Exca Coffee didirikan untuk menyajikan pengalaman minum kopi terbaik di Samarinda...' ) );
    $wp_customize->add_control( 'about_singkat_teks', array( 'label' => 'Teks Paragraf', 'section' => 'about_singkat_section', 'type' => 'textarea' ) );


    // 4. BAGIAN MENU ANDALAN
    $wp_customize->add_section( 'menu_section', array( 'title' => __( 'Bagian Menu Andalan (LP)', 'excacoffee' ), 'panel' => 'pengaturan_depan' ) );
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting( "menu_item_{$i}_gambar" );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "menu_item_{$i}_gambar", array( 'label' => "Gambar Item {$i}", 'section' => 'menu_section' ) ) );
        $wp_customize->add_setting( "menu_item_{$i}_judul", array( 'default' => "Menu {$i}" ) );
        $wp_customize->add_control( "menu_item_{$i}_judul", array( 'label' => "Judul Item {$i}", 'section' => 'menu_section' ) );
        $wp_customize->add_setting( "menu_item_{$i}_deskripsi" );
        $wp_customize->add_control( "menu_item_{$i}_deskripsi", array( 'label' => "Deskripsi Item {$i}", 'section' => 'menu_section', 'type' => 'textarea' ) );
    }
    $wp_customize->add_setting( 'menu_popup_gambar' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'menu_popup_gambar', array( 'label' => 'Gambar Pop-up Menu Lengkap', 'section' => 'menu_section', 'description' => 'Unggah satu gambar besar yang berisi daftar menu lengkap.' ) ) );


    // 5. BAGIAN GALERI
    $wp_customize->add_section('galeri_section', array(
        'title'    => __('Halaman Galeri & Video', 'excacoffee'),
        'priority' => 36,
    ));

    $wp_customize->add_setting('galeri_header_bg');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galeri_header_bg', array(
        'label'       => 'Background Judul (Captured Moments)',
        'description' => 'Upload foto lebar (landscape) untuk background header.',
        'section'     => 'galeri_section',
        'priority'    => 1, 
    )));
    $wp_customize->add_section( 'galeri_section', array( 'title' => __( 'Bagian Galeri', 'excacoffee' ), 'panel' => 'pengaturan_depan' ) );
    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting( "galeri_gambar_{$i}" );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "galeri_gambar_{$i}", array( 'label' => "Gambar Galeri {$i}", 'section' => 'galeri_section' ) ) );
    }
    // Setting untuk Video
    $wp_customize->add_setting( 'galeri_video_embed' );
    $wp_customize->add_control( 'galeri_video_embed', array(
        'label' => 'Kode Sematan Video YouTube',
        'section' => 'galeri_section',
        'type' => 'textarea',
        'description' => 'Salin kode "Embed" dari YouTube.'
    ));

    
    // 6. BAGIAN TESTIMONI PELANGGAN (LANDING PAGE)
    $wp_customize->add_section( 'testimoni_pelanggan_section', array( 'title' => __( 'Bagian Testimoni (LP)', 'excacoffee' ), 'panel' => 'pengaturan_depan' ) );
    
    // Loop untuk 3 testimoni
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting( "testi_{$i}_teks" );
        $wp_customize->add_control( "testi_{$i}_teks", array( 'label' => "Teks Testimoni {$i}", 'section' => 'testimoni_pelanggan_section', 'type' => 'textarea' ) );
        
        $wp_customize->add_setting( "testi_{$i}_nama" );
        $wp_customize->add_control( "testi_{$i}_nama", array( 'label' => "Nama Pelanggan {$i}", 'section' => 'testimoni_pelanggan_section' ) );

        $wp_customize->add_setting( "testi_{$i}_peran" );
        $wp_customize->add_control( "testi_{$i}_peran", array( 'label' => "Peran Pelanggan {$i} (cth: Mahasiswa)", 'section' => 'testimoni_pelanggan_section' ) );
    }


    // 7. BAGIAN PROMO / EVENT
    $wp_customize->add_section( 'event_section', array( 'title' => __( 'Bagian Promo/Event (LP)', 'excacoffee' ), 'panel' => 'pengaturan_depan' ) );
    $wp_customize->add_setting( 'promo_gambar', array( 'default' => get_template_directory_uri() . '/assets/images/promo-image.jpg' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'promo_gambar', array( 'label' => 'Gambar Promo', 'section' => 'event_section' ) ) );
    $wp_customize->add_setting( 'promo_judul', array( 'default' => 'PROMO & EVENT SPESIAL' ) );
    $wp_customize->add_control( 'promo_judul', array( 'label' => 'Judul Promo', 'section' => 'event_section' ) );
    $wp_customize->add_setting( 'promo_deskripsi', array( 'default' => 'Tunjukkan kartu pelajarmu dan dapatkan potongan harga spesial.' ) );
    $wp_customize->add_control( 'promo_deskripsi', array( 'label' => 'Deskripsi Promo', 'section' => 'event_section', 'type' => 'textarea' ) );

    // 8. BAGIAN KONTAK
    $wp_customize->add_section( 'kontak_section', array( 'title' => __( 'Bagian Kontak', 'excacoffee' ), 'panel' => 'pengaturan_depan' ) );
    $wp_customize->add_setting( 'kontak_alamat', array( 'default' => 'Jl. Kadrie Oening No.66, Air Hitam, Samarinda.' ) );
    $wp_customize->add_control( 'kontak_alamat', array( 'label' => 'Alamat', 'section' => 'kontak_section' ) );
    $wp_customize->add_setting( 'kontak_maps_embed' );
    $wp_customize->add_control( 'kontak_maps_embed', array( 
        'label' => 'Kode Sematan Google Maps', 
        'section' => 'kontak_section', 
        'type' => 'textarea',
        'description' => 'Salin kode dari Google Maps (Buka Google Maps > Cari Lokasi > Share > Embed a map.)'
    ) );
    $wp_customize->add_setting( 'kontak_telepon', array( 'default' => '0812-3456-7890' ) );
    $wp_customize->add_control( 'kontak_telepon', array( 'label' => 'Telepon', 'section' => 'kontak_section' ) );
    $wp_customize->add_setting( 'kontak_jam_buka', array( 'default' => '09:00 - 23:00 WITA' ) );
    $wp_customize->add_control( 'kontak_jam_buka', array( 'label' => 'Jam Buka', 'section' => 'kontak_section' ) );
}
add_action( 'customize_register', 'excacoffee_customize_register' );

// HALAMAN TENTANG
function excacoffee_tentang_customizer($wp_customize) {
    
    // 1. Bagian Panel
    $wp_customize->add_section('tentang_section', array(
        'title'    => __('Halaman Tentang & Tim', 'excacoffee'),
        'priority' => 35,
    ));

    // BACKGROUND HALAMAN
    $wp_customize->add_setting('tentang_bg_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'tentang_bg_image', array(
        'label'    => 'Background Halaman Tentang',
        'section'  => 'tentang_section',
        'settings' => 'tentang_bg_image',
    )));

    // ANGGOTA TIM
    for ($i = 1; $i <= 10; $i++) {
        $wp_customize->add_setting("tim_member_{$i}_nama", array('default' => "Anggota {$i}"));
        $wp_customize->add_control("tim_member_{$i}_nama", array(
            'label'   => "Nama Anggota {$i}",
            'section' => 'tentang_section',
            'type'    => 'text'
        ));

        $wp_customize->add_setting("tim_member_{$i}_role", array('default' => 'Developer'));
        $wp_customize->add_control("tim_member_{$i}_role", array(
            'label'   => "Peran/Jabatan Anggota {$i}",
            'section' => 'tentang_section',
            'type'    => 'text'
        ));

        $wp_customize->add_setting("tim_member_{$i}_nim", array('default' => 'NIM: ...'));
        $wp_customize->add_control("tim_member_{$i}_nim", array(
            'label'   => "NIM/Info Tambahan {$i}",
            'section' => 'tentang_section',
            'type'    => 'text'
        ));

        $wp_customize->add_setting("tim_member_{$i}_foto");
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "tim_member_{$i}_foto", array(
            'label'   => "Foto Anggota {$i}",
            'section' => 'tentang_section',
        )));
    }
}
add_action('customize_register', 'excacoffee_tentang_customizer');

// SETUP MENU
function excacoffee_menu_customizer($wp_customize) {
    
    // Panel Utama
    $wp_customize->add_section('menu_section_exca_full', array(
        'title'    => __('Daftar Menu (Sidebar Lengkap)', 'excacoffee'),
        'priority' => 35,
    ));

    function tambah_kontrol_menu($wp_customize, $section, $id_prefix, $label_prefix, $jumlah_slot = 30) {
        for ($i = 1; $i <= $jumlah_slot; $i++) { 
            $wp_customize->add_setting("{$id_prefix}_item_{$i}_nama");
            $wp_customize->add_control("{$id_prefix}_item_{$i}_nama", array('label' => "{$label_prefix} #{$i} - Nama", 'section' => $section));
            
            $wp_customize->add_setting("{$id_prefix}_item_{$i}_harga");
            $wp_customize->add_control("{$id_prefix}_item_{$i}_harga", array('label' => "{$label_prefix} #{$i} - Harga", 'section' => $section));
        }
    }

    // 1. Signature
    $wp_customize->add_setting('judul_kiri_1', array('default' => 'Exca Signature Series'));
    $wp_customize->add_control('judul_kiri_1', array('label' => 'Judul Kiri 1', 'section' => 'menu_section_exca_full'));
    tambah_kontrol_menu($wp_customize, 'menu_section_exca_full', 'kiri1', 'Signature');

    // 2. Coffee
    $wp_customize->add_setting('judul_kiri_2', array('default' => 'Coffee Series'));
    $wp_customize->add_control('judul_kiri_2', array('label' => 'Judul Kiri 2', 'section' => 'menu_section_exca_full'));
    tambah_kontrol_menu($wp_customize, 'menu_section_exca_full', 'kiri2', 'Coffee');

    // 3. Manual Brew
    $wp_customize->add_setting('judul_kiri_3', array('default' => 'Manual Brew Series'));
    $wp_customize->add_control('judul_kiri_3', array('label' => 'Judul Kiri 3', 'section' => 'menu_section_exca_full'));
    tambah_kontrol_menu($wp_customize, 'menu_section_exca_full', 'kiri3', 'Manual Brew');

    // 4. Milk Shake
    $wp_customize->add_setting('judul_kiri_4', array('default' => 'Milk Shake Series'));
    $wp_customize->add_control('judul_kiri_4', array('label' => 'Judul Kiri 4', 'section' => 'menu_section_exca_full'));
    tambah_kontrol_menu($wp_customize, 'menu_section_exca_full', 'kiri4', 'Milk Shake');

    // 1. Non Coffee
    $wp_customize->add_setting('judul_kanan_1', array('default' => 'Non Coffee Series'));
    $wp_customize->add_control('judul_kanan_1', array('label' => 'Judul Kanan 1', 'section' => 'menu_section_exca_full'));
    tambah_kontrol_menu($wp_customize, 'menu_section_exca_full', 'kanan1', 'Non Coffee');

    // 2. Tea Series
    $wp_customize->add_setting('judul_kanan_2', array('default' => 'Tea Series'));
    $wp_customize->add_control('judul_kanan_2', array('label' => 'Judul Kanan 2', 'section' => 'menu_section_exca_full'));
    tambah_kontrol_menu($wp_customize, 'menu_section_exca_full', 'kanan2', 'Tea');

    // 3. Mocktail
    $wp_customize->add_setting('judul_kanan_3', array('default' => 'Mocktail'));
    $wp_customize->add_control('judul_kanan_3', array('label' => 'Judul Kanan 3', 'section' => 'menu_section_exca_full'));
    tambah_kontrol_menu($wp_customize, 'menu_section_exca_full', 'kanan3', 'Mocktail');

    // 4. Foods
    $wp_customize->add_setting('judul_kanan_4', array('default' => 'Foods'));
    $wp_customize->add_control('judul_kanan_4', array('label' => 'Judul Kanan 4', 'section' => 'menu_section_exca_full'));
    tambah_kontrol_menu($wp_customize, 'menu_section_exca_full', 'kanan4', 'Foods');

    // 5. Snack
    $wp_customize->add_setting('judul_kanan_5', array('default' => 'Snack'));
    $wp_customize->add_control('judul_kanan_5', array('label' => 'Judul Kanan 5', 'section' => 'menu_section_exca_full'));
    tambah_kontrol_menu($wp_customize, 'menu_section_exca_full', 'kanan5', 'Snack');
}
add_action('customize_register', 'excacoffee_menu_customizer');

// --- SETUP PENGATURAN KONTAK (WA, JAM BUKA, DLL) ---
function excacoffee_kontak_customizer($wp_customize) {
    
    $wp_customize->add_section('kontak_data_section', array(
        'title'    => __('Pengaturan Kontak & Sosmed', 'excacoffee'),
        'priority' => 37,
    ));

    // 1. WhatsApp
    $wp_customize->add_setting('kontak_wa', array('default' => '6281234567890'));
    $wp_customize->add_control('kontak_wa', array(
        'label'       => 'Nomor WhatsApp (Format: 628...)',
        'section'     => 'kontak_data_section',
        'type'        => 'text',
    ));

    // 2. Email
    $wp_customize->add_setting('kontak_email', array('default' => 'hello@excacoffee.com'));
    $wp_customize->add_control('kontak_email', array(
        'label'       => 'Alamat Email',
        'section'     => 'kontak_data_section',
        'type'        => 'text',
    ));

    // 3. Instagram Link
    $wp_customize->add_setting('kontak_ig_url', array('default' => 'https://instagram.com/'));
    $wp_customize->add_control('kontak_ig_url', array(
        'label'       => 'Link Instagram',
        'section'     => 'kontak_data_section',
        'type'        => 'url',
    ));

    // 4. Jam Buka
    $wp_customize->add_setting('kontak_jam_buka', array('default' => 'Setiap Hari: 10.00 - 23.00'));
    $wp_customize->add_control('kontak_jam_buka', array(
        'label'       => 'Jam Operasional',
        'section'     => 'kontak_data_section',
        'type'        => 'textarea',
    ));
    
    // 5. Alamat (Pindahkan/Buat Baru disini biar ngumpul)
    $wp_customize->add_setting('kontak_alamat_teks', array('default' => 'Jl. Pahlawan No. 123, Samarinda'));
    $wp_customize->add_control('kontak_alamat_teks', array(
        'label'       => 'Alamat Lengkap',
        'section'     => 'kontak_data_section',
        'type'        => 'textarea',
    ));

    // 6. LINK ORDER (GOFOOD/GRABFOOD)
    $wp_customize->add_setting('kontak_order_url', array('default' => 'https://gofood.co.id/'));
    $wp_customize->add_control('kontak_order_url', array(
        'label'       => 'Link GoFood / GrabFood',
        'description' => 'Masukkan link restoran Anda di aplikasi delivery.',
        'section'     => 'kontak_data_section',
        'type'        => 'url',
    ));
}
add_action('customize_register', 'excacoffee_kontak_customizer');