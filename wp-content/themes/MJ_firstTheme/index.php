<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Megaju's First Theme WP</title>
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
                    the_content();
                endwhile; 
            ?>
        </section>
        
        <?php get_footer(); ?>

</body>

</html>