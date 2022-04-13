<section class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <?php if (is_active_sidebar('masidebar')) {
            dynamic_sidebar('masidebar');
        } ?>
        <?php if (!is_single()) { ?>
            <!-- <h4>A propos</h4> -->
            <p><?php the_author_meta('description'); ?></p>
            <!-- <h4>Archives</h4> -->
            <ol class="list-unstyled">
                <?php wp_get_archives('limit=1'); ?>
            </ol>
        <?php } else {
            $current_id = get_the_ID(); ?>
            <h4>Autres articles</h4>
            <ol class="list-unstyled">
                <?php
                $author_posts = new WP_Query(array('author' => get_the_author_meta('ID')));
                while ($author_posts->have_posts()) {
                    $author_posts->the_post();
                    if (get_the_ID() !== $current_id) {
                        ?><li class="list-unstyled"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php
                    }
                        
                        ?>
                    <?php
                }
            }
                ?>
            </ol>
    </div>
</section>