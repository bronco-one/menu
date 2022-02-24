<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kategorie */

$this->title = $model->id_kategorii;
$this->params['breadcrumbs'][] = ['label' => 'Kategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kategorie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_kategorii' => $model->id_kategorii], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kategorii' => $model->id_kategorii], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
