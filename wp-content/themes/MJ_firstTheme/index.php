<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Megaju's First Theme WP</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <?php say_hello(); get_header(); ?>

        <aside>
            <?php dynamic_sidebar('my_custom_zone'); ?>
        </aside>

        <section>
            <?php
                while (have_posts()) :
                    the_post();
                    the_title();
                    the_content();
                    the_author();
            
                    comments_template();
                    comment_form();
                endwhile; 
            ?>
        </section>
        
        <?php get_footer(); ?>

</body>

</html>