<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kategorie */

$this->title = $model->id_kategorii;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kategories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategorie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_kategorii], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_kategorii], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kategorii',
            'kategoria_nazwa',
        ],
    ]) ?>

</div>
