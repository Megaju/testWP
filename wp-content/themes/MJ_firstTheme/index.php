<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Megaju's First Theme WP</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php get_header(); ?>

       <div class="flexbox">
        
            <?php dynamic_sidebar('my_custom_zone'); ?>
        

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
        
        </div>
        
        <?php get_footer(); ?>

</body>

</html>