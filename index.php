<?php
get_header(); 
?>

<main class="halaman-konten">
    <div class="container-page" style="text-align: left;">
        <?php if ( have_posts() ) : ?>
            
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p>Maaf, tidak ada konten yang ditemukan.</p>
            <?php
        endif;
        ?>
    </div>
</main>

<?php 
get_footer(); 
?>