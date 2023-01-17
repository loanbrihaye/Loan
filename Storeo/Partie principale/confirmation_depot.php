<?php
/* Template Name: confirmation_depot */

get_header(); 

?>

<body>
    <form>
      <div class="form2">
      <p>Votre jeu a bien été déposé, il n'attend plus qu'à être échangé.</p>  
      <p>Nom du jeu</p>
        <input type="text" name="name" placeholder="Nom du jeu">
        <p>Message</p>
        <input type="text" name="name" placeholder="Votre message">
        <br>
       
        <div id="back">
        <a href="https://storeo.emu.isfsc.be/depot/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_back.png"></a>
      </div>

<div id="forward">
        <a href="https://storeo.emu.isfsc.be/accueil/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_forward.png"></a>
      </div>
</div>
  </div>
</form>
</div>
</section>
</body>
<?php 

get_footer(); 

?>