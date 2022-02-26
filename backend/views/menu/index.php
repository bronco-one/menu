<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Kategorie;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_potrawy',
            'nazwa_potrawy',
            'skladniki_potrawy:ntext',
            [
                'attribute'=>'kategoria_potrawy',
                'label'=>'Kategorie',
                'value'=> function($data){
                    return Kategorie::findOne(['id_kategorii'=>$data->kategoria_potrawy])->kategoria_nazwa;
                },
            ],
            'gramatura',
            //'cena',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Menu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_potrawy' => $model->id_potrawy]);
                 }
            ],
        ],
    ]); ?>


</div>
