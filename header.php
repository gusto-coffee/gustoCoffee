<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="<?php bloginfo('charset'); ?>" />
            <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>      
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/reset.css">
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

            <?php
            	wp_head();
            ?>

        </head>
        <body>
            <header>
                <div id="container">
					<a id="logo" href="#">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png"/>
						<!--<a href="http://localhost/GustoCoffee/"><img src="<?php //bloginfo('template_url'); ?>/img/logo.png" alt="logo" /></a>-->
					</a>
					<!--<nav id="navPrincipal">
						<ul>
							<li><a href="#">Lien 1</a></li> 
							<li><a href="#">Lien 2</a></li> 
							<li><a href="#">Lien 3</a></li> 
						</ul>
					</nav>-->

					<?php
						//wp_nav_menu(array('theme_location' => 'menuprincipal'));

						$defaults = array( 'menu' => '', 
											'container' => 'nav', 
											'container_class' => '', 
											'container_id' => 'navPrincipal', 
											'menu_class' => 'menu', 
											'menu_id' => '',
											'echo' => true, 
											'fallback_cb' => 'wp_page_menu', 
											'before' => '', 
											'after' => '', 
											'link_before' => '', 
											'link_after' => '', 
											'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
											'item_spacing' => 'preserve',
											'depth' => 0, 
											'walker' => '', 
											'theme_location' => 'menuprincipal' );
						wp_nav_menu($defaults);
					?>

					<!--<form>
						<input type="text" placeholder="mots clé(s)" />
						<input type="submit"/>
					</form>-->
				</div>
            </header>
            <div id="container">