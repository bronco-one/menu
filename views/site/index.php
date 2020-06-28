<?php

/* @var $this yii\web\View */

$this->title = 'Restauracja Baszta';
?>
<div class="site-index">

    <div class="jumbotron ">
        <div class="banner">
        <h1>Baszta Zaprasza!</h1>
         <?php foreach($home as $h) { ?>
        <p class="lead"><?= $h['title'] ?></p>
        </div>
        
    </div>

    <div class="body-content">

        <div class="row ">
            <?= $h['content'] ?>
        </div>

    </div>
    <?php } ?>
</div>
