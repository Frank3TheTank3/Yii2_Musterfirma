<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\BackendCarousel $model */

$this->title = 'Update Backend Carousel: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Backend Carousels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="backend-carousel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
