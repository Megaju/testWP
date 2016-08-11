<!-- PETIT TEST DE FONCTION PERSO -->
<?php
    function say_hello() {
        echo '<p>Salut tout le monde !</p>';
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


<!-- FILTRE POUR TITLE (les titres de plus de 50 caractères sont tronqués) -->
<?php add_filter('the_title', 'truncate_long_title');
        function truncate_long_title($title) {
            if (strlen($title) > 50) {
                $title = substr($title, 0, 50).'...';
            }
        return $title;
        }; 
?>


<!-- RENDRE UN TEMPLATE OBLIGATOIRE -->
<!-- < ?php function get_template_part( $slug, $name = null )
 -->
<?php
get_template_part( 'mon-template.php' );
?>