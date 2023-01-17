<?php
/* Template Name: setting */

get_header(); 

?>
<body>
    <form>
      <div class="form1">
        <p>Pseudo</p>
        <input type="text" name="name" placeholder="">
        <br>
        <p>Langues</p>
        <select name="Langue">
          <option value="">language</option>
          <option value="">Français</option>
          <option value="">Anglais</option>
          <option value="">Néerlandais</option>

        </select>

        <div id="back">
        <a href="https://storeo.emu.isfsc.be/pre-2006/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_back.png"></a>
      </div>

<div id="forward">
        <a href="https://storeo.emu.isfsc.be/demande/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_forward.png"></a>
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