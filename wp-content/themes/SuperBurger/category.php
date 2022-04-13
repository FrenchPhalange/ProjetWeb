<?php get_header(); ?>

<main class="row">
    <header>
        <?php 
        
            the_archive_title("<h3 class='entry-title'>","</h3>");
            the_archive_description("<em class='taxonomy-description'>","</em>");
        
        ?>
        
    </header>
    <section class="blog-main">
        <?php
        /* POST ? ALORS IL RECUPERE SINON RIEN */
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('content', 'category');
            }
        }
        ?>
    </section>
</main>

<?php get_footer(); ?>