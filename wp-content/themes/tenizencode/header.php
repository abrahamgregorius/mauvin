<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <?php wp_head() ?>
</head>
<body>
    <div id="app">
        <header>
            <div class="container">
                <div class="logo">
                    <?php if(has_custom_logo()): ?>
                        <?php the_custom_logo() ?>
                    <?php else: ?>
                    <span><?= get_bloginfo('title') ?></>
                    <?php endif ?>
                </div>
                <label for="toggle-checkbox" class="toggle-menu btn btn-primary">&equiv;</label>
                <input type="checkbox" name="" id="toggle-checkbox">
                <nav class="header-menu">
                    <ul>
                        <?php 
                            $menus = wp_get_nav_menu_items('main');
                            foreach($menus as $menu) :
                        ?>
                        <li>
                            <a href="<?php echo $menu->url ?>"><?php echo $menu->title ?></a>
                        </li>

                        <?php endforeach ?>
                    </ul>
                </nav>
            </div>
        </header>