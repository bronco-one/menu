<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kategorie */

$this->title = 'Update Kategorie: ' . $model->id_kategorii;
$this->params['breadcrumbs'][] = ['label' => 'Kategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategorii, 'url' => ['view', 'id_kategorii' => $model->id_kategorii]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategorie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
