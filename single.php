<?php
get_header();
?>

<!-- main content here -->


<main>
    <div class="content-wrapper">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'article');
            }
        }

        ?>


</main>
</div>


</div>

<?php
get_footer();
?>