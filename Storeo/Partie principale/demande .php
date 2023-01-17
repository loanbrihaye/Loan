<?php
/* Template Name: demande */

get_header(); 

?>

<body>
    <form>
      <div class="form2">
      <p>Malheuresement Le jeu que vous recherchez n'est pas encore présent sur le site mais vous pouvez
        nous envoyer votre demande pour être prévenu dès que le jeu souhaité sera disponible.</p>  
      <p>Nom du jeu</p>
        <input type="text" name="name" placeholder="Nom du jeu">
        <p>Message</p>
        <input type="text" name="name" placeholder="Votre message">
        <br>
       
        <div id="back">
        <a href="https://storeo.emu.isfsc.be/pre-2006/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_back.png"></a>
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