<?php
/* Template Name: form_CD_depot */

get_header(); 

?>
<body>
    <form>
      <div class="form1">
        <p>Nom du jeu</p>
        <input type="text" name="name" placeholder="Nom du jeu">
        <br>
        <p>Console</p>
        <select name="system">
          <option value="">Select you system</option>
          <option value="">Amiga CD32</option>
          <option value="">Atari Jaguar</option>
          <option value="">Atari Lynx</option>
          <option value="">Dreamcast</option>
          <option value="">Game Boy</option>
          <option value="">Game Boy color</option>
          <option value="">Game Boy Advance SP</option>
          <option value="">Master System</option>
          <option value="">Mega Drive / Sega Genesis</option>
          <option value="">Neo-Geo</option>
          <option value="">Nintendo Entertainment System (NES) / Famicom</option>
          <option value="">Nintendo 64</option>
          <option value="">Nintendo GameCube</option>
          <option value="">PC Engine</option>
          <option value="">PlayStation</option>
          <option value="">PlayStation 2</option>
          <option value="">Sega Saturn</option>
          <option value="">Super Nintendo (SNES) / Super Famicom</option>
          <option value="">Virtual Boy</option>
          <option value="">Xbox</option>
          <option value="">Nintendo DS</option>
          <option value="">Nintendo 3DS</option>
          <option value="">Nintendo Switch</option>
          <option value="">PlayStation 3</option>
          <option value="">PlayStation 4</option>
          <option value="">PlayStation 5</option>
          <option value="">PSP</option>
          <option value="">Wii</option>
          <option value="">Wii U</option>
          <option value="">Xbox 360</option>
          <option value="">Xbox One</option>
          <option value="">Xbox Serie S</option>
          <option value="">Xbox Serie X</option>
          
        </select>
        <p>Genre</p>
        <select name="type">
        <option value="">Select your type of game</option>
          <option value="">Action-aventure</option>
          <option value="">Aventure</option>
          <option value="">Combat</option>
          <option value="">FPS</option>
          <option value="">Plateforme</option>
          <option value="">RTS</option>
          <option value="">Rythme</option>
          <option value="">RPG</option>
          <option value="">Simulation</option>
          <option value="">Sport</option>
          <option value="">TPS</option>
        </select>
        <p>Année</p>
        <select name="year">
          <option value="">Select your Year</option>
          <option value="">2022</option>
          <option value="">2021</option>
          <option value="">2020</option>
          <option value="">2019</option>
          <option value="">2018</option>
          <option value="">2017</option>
          <option value="">2016</option>
          <option value="">2015</option>
          <option value="">2014</option>
          <option value="">2013</option>
          <option value="">2012</option>
          <option value="">2011</option>
          <option value="">2010</option>
          <option value="">2009</option>
          <option value="">2008</option>
          <option value="">2007</option>
          <option value="">2006</option>
          <option value="">2005</option>
          <option value="">2004</option>
          <option value="">2003</option>
          <option value="">2002</option>
          <option value="">2001</option>
          <option value="">2000</option>
          <option value="">1999</option>
          <option value="">1998</option>
          <option value="">1997</option>
          <option value="">1996</option>
          <option value="">1995</option>
          <option value="">1994</option>
          <option value="">1993</option>
          <option value="">1992</option>
          <option value="">1991</option>
          <option value="">1990</option>
          <option value="">1989</option>
          <option value="">1988</option>
          <option value="">1987</option>
          <option value="">1986</option>
          <option value="">1985</option>
          <option value="">1984</option>
          <option value="">1983</option>
        </select>

        <div id="back">
        <a href="https://storeo.emu.isfsc.be/depot/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_back.png"></a>
      </div>

<div id="forward">
        <a href="https://storeo.emu.isfsc.be/confirmation_depot/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_forward.png"></a>
      </div>
  </div>
</form>
</div>
</section>
</body>
<?php 

get_footer(); 

?>