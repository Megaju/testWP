<!-- PETIT TEST DE FONCTION PERSO -->
<?php
    function say_hello() {
        echo 'Salut tout le monde !';
    };
?>

<!-- ZONE DE MENU PRINCIPALE -->
<?php
add_action('init', 'zero_add_menu');
function zero_add_menu()
{
    register_nav_menu('main_menu', 'Menu principal');
};
?>

<!-- ZONE DE MENU 'SUPERIEURE' -->
<?php
    add_action('widgets_init','zero_add_sidebar');
    function zero_add_sidebar() {
    register_sidebar(array(
        'id' => 'my_custom_zone',
        'name' => 'Zone supérieure',
        'description' => 'Apparait en haut du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
};
?>