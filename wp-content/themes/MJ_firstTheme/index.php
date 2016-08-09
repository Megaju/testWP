<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Megaju's First Theme WP</title>
</head>

<body>
    <?php say_hello(); ?>
    
    <?php get_header(); ?>
    
    <aside>
        <?php dynamic_sidebar('my_custom_zone'); ?>
    </aside>
       
    <?php get_footer(); ?>
        
</body>

</html>