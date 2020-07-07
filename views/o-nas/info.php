<?php 
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'O nas';
?>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php foreach($slides as $slide){?>
        <div class="swiper-slide">
           <?= Html::img('/img/'.$slide['name'].'.jpg') ?> 
           
        </div>
         <?php } ?>
    </div>
    
   <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
  <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
   
    
</div>
<div>
    <?php    foreach ($text as $t) { ?>
    <div class="text-center"> <h3><?= $t['title'] ?></h3></div>
    <div class="container text-justify"> <?= $t['content'] ?></div>
    <?php } ?>
</div>


 <script>
     var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 6500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    </script>
