<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title generated from method in functions.php -->

    <?php
    wp_head();
    ?>
</head>

<body>



    <header>
        <a href="index.html" class="site-title"><?php echo get_bloginfo('name') ?></a>
        <nav>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="navbar">%3$s</ul>'
                )
            );
            ?>
        </nav>
        <hr>


    </header>