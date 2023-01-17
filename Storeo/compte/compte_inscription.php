<?php
/* Template Name: compte_inscription */

get_header(); 

?>
<body>
    <form>
      <div class="form3">
        <p>Adresse mail</p>
        <input type="text" name="name" placeholder="">
        <br>
        <p>Mot de passe</p>
        <input type="text" name="name" placeholder="">
        <p>Confirmation mot de passe</p>
        <input type="text" name="name" placeholder="">
       
        <div id="inscription">
        <a href="https://storeo.emu.isfsc.be/compte_connexion/"><p>Déjà membre</p></a>
      </div>
       
    <div id="back">
        <a href="https://storeo.emu.isfsc.be/accueil/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_back.png"></a>
      </div>

<div id="forward">
        <a href="https://storeo.emu.isfsc.be/compte_connexion/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_forward.png"></a>
      </div>

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