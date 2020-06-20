<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SlidesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slides';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slides-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Slides', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'page',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
