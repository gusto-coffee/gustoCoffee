<?php
/****************************************/
/*Fichier de confoguation du back office*/
/****************************************/

add_action('init' , 'activerMenusBackOffice');

function activerMenusBackOffice()
{
	register_nav_menus(array("menuprincipal" => "Menu Principal"));
}


/****************************************/
/*Activer image avant plan*/
/****************************************/

add_theme_support('post-thumbnails' , array('page', 'post', 'livre'));

/****************************************/
/*Créer un format d'image/
/****************************************/

add_image_size('perso' , 100, 100, true);



/****************************************/
/*Widget */
/****************************************/

add_action('widgets_init' , "widgetsPerso");

function widgetsPerso()
{
	register_sidebar( array(
        'name' => 'Gusto Coffee Sidebar',
        'id' => 'sidebar-1',
        'description' => 'Ma sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
}

?>