<!DOCTYPE html>
<html>
    <head>
        <title></title>
		<?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="eight columns">
                    <h1><a href="<?php bloginfo('wpurl') ?>"><?php bloginfo('name'); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <div class="four columns">
        			<?php get_search_form(); ?>
    			</div>
            </header>
            <div class="row">
    <div class="twelve columns">
        <?php wp_nav_menu(array(
        	'container' => 'nav',
            'sort_column' => 'menu_order', 
            'container_class' => 'blank-menu-header'
            ));?>
    </div>
</div>