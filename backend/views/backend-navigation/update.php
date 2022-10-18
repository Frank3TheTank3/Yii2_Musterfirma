<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\BackendNavigation $model */

$this->title = 'Update Backend Navigation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Backend Navigations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="backend-navigation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
