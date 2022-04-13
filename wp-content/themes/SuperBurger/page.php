<?php get_header(); ?>
<section class="row">
<?php if (is_active_sidebar('header')) {
            dynamic_sidebar('header');
        } ?>
</section>
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