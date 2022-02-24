<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_potrawy') ?>

    <?= $form->field($model, 'nazwa_potrawy') ?>

    <?= $form->field($model, 'skladniki_potrawy') ?>

    <?= $form->field($model, 'kategoria_potrawy') ?>

    <?= $form->field($model, 'gramatura') ?>

    <?php // echo $form->field($model, 'cena') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
