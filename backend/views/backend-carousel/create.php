<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\BackendCarousel $model */

$this->title = 'Create Backend Carousel';
$this->params['breadcrumbs'][] = ['label' => 'Backend Carousels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="backend-carousel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
