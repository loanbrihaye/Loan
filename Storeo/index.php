<?php
/* Template Name: index */

get_header(); 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style_carousel.css">
      <title>Document</title>
  </head>
  <body>
      <div class="carousel">
          <div class="carousel-item active">
            <img src="./Images-copie/Storeo1.png" alt="Image 1">
          </div>
          <div class="carousel-item">
            <img src="./Images-copie/Storeo2.png" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="./Images-copie/Storeo3.png" alt="Image 3">
          </div>
        
          <button class="carousel-button carousel-button-prev">
            <img src="./Images-copie/fleche_back.png" alt="Button Prev">
          </button>
          <button class="carousel-button carousel-button-next">
            <img src="./Images-copie/fleche_forward.png" alt="Button Next">
          </button>
        </div>
  </body>
  <script>
    const carousel = document.querySelector('.carousel');
    const items = carousel.querySelectorAll('.carousel-item');
    const prevButton = carousel.querySelector('.carousel-button-prev');
    const nextButton = carousel.querySelector('.carousel-button-next');

    let currentIndex = 0;

    function showCurrentItem() {
      for (let i = 0; i < items.length; i++) {
        items[i].classList.remove('active');
      }
      items[currentIndex].classList.add('active');
    }

    prevButton.addEventListener('click', () => {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = items.length - 1;
      }
      showCurrentItem();
    });

    nextButton.addEventListener('click', () => {
      currentIndex++;
      if (currentIndex >= items.length) {
        currentIndex = 0;
      }
      showCurrentItem();
    });

    showCurrentItem();
  </script>
</html>
  
<?php 

get_footer(); 

?>