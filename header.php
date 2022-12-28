<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/app.css">
</head>
  <header>
        
        <div id="logo_storeo">
        <button onclick="go_whishlist()">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo_storeo_web.png">
        </button>
            </div>

        <div id="logo_header">
        <button onclick="go_whishlist()">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/Logo_whishlist.png">
        </button>
        <button href="/setting.php">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/Logo_setting.png">
        </button>
        <button onclick="go_compte()">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/Logo_Compte.png">
        </button>
        </div>
        
        <ul>
        <button onclick="go_pre_2006()">
            <li id="Bouton1"><a href="#">Pre 2006</a></li>
        </button>
            <button onclick="go_post_2006()">
            <li id="Bouton2"><a href="#">Post 2006</a></li>
            </button>
            <button onclick="go_depot()">
            <li id="Bouton3"><a href="#">Depôt</a></li>
            </button>
            <button onclick="go_contact()">
            <li id="Bouton4"><a href="#">Contact</a></li>
            </button>
        </ul>

    </header>