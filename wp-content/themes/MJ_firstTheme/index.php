<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Megaju's First Theme WP</title>
</head>

<body>
    <?php say_hello(); ?>
    
    <header>
        <?php wp_nav_menu(array('theme_location' => 'main_menu'));?>
    </header>
    
    <aside>
        <?php dynamic_sidebar('my_custom_zone'); ?>
    </aside>
        
</body>

</html>