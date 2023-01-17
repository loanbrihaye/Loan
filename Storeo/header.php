<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/app.css">

</head>

    <header class="header">
    <div class="container">
      <div class="nav1">
        <div class="logo">
        <button onclick="location.href='https://storeo.emu.isfsc.be/accueil/'">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo_storeo_web.png">
        </button>
        </div>
      </div>
        <div class="div-buttons">
            <div class="buttons">
                <div class="img1">
                <button onclick="location.href='https://storeo.emu.isfsc.be/whislist/'">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/Logo_whishlist.png">
                </button>
                </div>
                <div class="img2">
                <button onclick="location.href='https://storeo.emu.isfsc.be/setting/'">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/Logo_setting.png">
                </button>
                  </div>
                <div class="img3">
                <button onclick="location.href='https://storeo.emu.isfsc.be/compte_inscription/'">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/Logo_Compte.png">
                    </button>
                </div>
            </div>
      </div>
      <div class="nav2">
        <nav class="navigation">
          <div class="menu-wrapper">
            <ul class="menu-list">
              <?php wp_nav_menu([
                    'theme_location' => '',
                    'container' => false,
                    'menu_class' => 'navbar-nav me-auto'
                    ]); ?>

            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>