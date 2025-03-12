<?php
get_header();
?>

<!-- main content here -->


<main>
    <div class="content-wrapper">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="content-preview">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta"> <?php the_date(); ?>, by <?php the_author(); ?></div>
                    <div class="post-excerpt-content"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>


<?php
get_footer();
?>