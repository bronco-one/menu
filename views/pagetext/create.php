<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PageText */

$this->title = 'Create Page Text';
$this->params['breadcrumbs'][] = ['label' => 'Page Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
