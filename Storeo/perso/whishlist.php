<?php
/* Template Name: whislist */

get_header(); 

?>
<body>
    <form>
      <div class="form4">
        <p>whislist</p>
      <img src=" https://www.gamecash.be/thumbnail-600/doom-e51424.jpg" style="
      position: relative;
    top: 20px;
    left: -225px;
    height: 154px;
    width: 217px;
    border: white;
    border-radius: 20px;
    border-left: 5px solid rgb(255, 255, 255);
    border-top: 5px solid rgb(255, 255, 255);
    border-right: 5px solid rgb(255, 255, 255);
    border-bottom: 5px solid rgb(255, 255, 255);">
    <div id="info" style="  
    background: rgba(119, 28, 146, 0.3);
    padding: 3rem;
    height: 136px;
    width: 193px;
    border-radius: 60px;
    border: 10px solid rgb(255, 255, 255);
    text-align: center;
    left: 510px;
    top: 13px;
    margin-left: -25%;
    position: relative;
    margin-top: -25%"
      <br><p>Doom</p>
      <br><p>Action/FPS</p>
      <br><p>Super Nintendo
    </div>

        <div id="back">
        <button onclick="location.href='accueil.php'">
    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_back.png">
  </button>
</div>

    <div id="forward">
        <button onclick="location.href='form_contact.php'">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/fleche_forward.png">
      </button>
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