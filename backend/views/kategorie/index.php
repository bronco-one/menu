<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategorieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategorie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kategorie', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kategorii',
            'kategoria_nazwa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kategorie $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kategorii' => $model->id_kategorii]);
                 }
            ],
        ],
    ]); ?>


</div>
