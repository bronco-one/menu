<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/css/autoplay.css">
    <script src="<?= Yii::$app->request->baseUrl; ?>/js/swiper.min.js"></script>
    <script src="https://kit.fontawesome.com/8428b095a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/img/logo-baszta.png',['alt'=> Yii::$app->name,'class'=>'img-fluid']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'menu-y ',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'menu-btn'],
        'items' => [
            ['label' => 'Strona Domowa', 'url' => ['/site/index']],
            ['label' => 'Menu', 'url' => ['/menu-kategorii/index']],
            ['label' => 'O nas', 'url' => ['/o-nas/info']],
            ['label' => 'Lokalizacja', 'url' => ['/lokalizacja/mapa']],
            ['label' => 'Kontakt', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Logowanie', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        
        <?= $content ?>
       
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="fb-page" 
  data-href="https://www.facebook.com/facebook"
  data-width="380" 
  data-hide-cover="false"
  data-show-facepile="false"><i class="fab fa-facebook-square"></i></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
