<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kategorie;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nazwa_potrawy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skladniki_potrawy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kategoria_potrawy')->dropDownList(
        ArrayHelper::map(Kategorie::find()->all(),'id_kategorii','kategoria_nazwa'),['prompt'=>'Wybierz']
    ) ?>

    <?= $form->field($model, 'gramatura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cena')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
