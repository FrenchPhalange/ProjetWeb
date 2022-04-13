<?php get_header(); ?>
<main class="row">
    <section class="blog-main col-sm-8">
        <?php
        /* POST ? ALORS IL RECUPERE SINON RIEN */
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('content', get_post_format());
            }
        }
        ?>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>