<?php
/* Template Name: Accueil */

get_header(); 

?>
<body>
<section class="background">
  <div class="back1">
    <form>
      <div class="container">
        <p>Nom du jeu</p>
        <input type="text" name="name" placeholder="Nom du jeu">
        <br>
        <p>Console</p>
        <select name="system">
          <option value="">Sélectionnez</option>
          <option value="">Sélectionnez</option>
          <option value="">Sélectionnez</option>
          <option value="">Sélectionnez</option>
        </select>
        <p>Genre</p>
        <select name="type">
          <option value="">Sélectionnez</option>
          <option value="">Sélectionnez</option>
          <option value="">Sélectionnez</option>
          <option value="">Sélectionnez</option>
        </select>
        <p>Année</p>
        <select name="year">
          <option value="">Sélectionnez</option>
          <option value="">Sélectionnez</option>
          <option value="">Sélectionnez</option>
          <option value="">Sélectionnez</option>
        </select>

        <div id="back">
      <button onclick="goBack()">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_back.png">
      </button>
    </div>

    <div id="forward">
      <button onclick="goBack()">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_forward.png">
      </button>
    </div>
  </div>
</form>
</div>
</section>
</body>
<?php 

get_footer(); 

?>