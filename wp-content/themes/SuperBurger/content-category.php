<header class="entry-header">
    <h3>
        <a href="<?php the_permalink(); ?>" rel="bookmark">
            <?php the_title(); ?>
        </a>
        <?php 
        
        if('post' == get_post_type()) {
            ?>
            <div class="blog-meta">
                <h5><?= get_the_date();?></h5>
            </div>
            <?php
        }
        
        ?>
    </h3>
</header>
<div class="entry-summary">
    <p>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark">(<?php esc_html_e('lire la suite &rarr;') ?>)</a>
    </p>
</div>