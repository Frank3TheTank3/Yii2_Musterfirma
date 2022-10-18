<?php

use backend\models\BackendCarousel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\BackendCarouselSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Backend Carousels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="backend-carousel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Backend Carousel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'carouselElementPath',
            'carouselElementDescription',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BackendCarousel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
