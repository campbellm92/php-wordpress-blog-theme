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
                the_content();
            }
        }

        ?>


</main>
</div>


</div>

<?php
get_footer();
?>