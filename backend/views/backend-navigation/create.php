<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\BackendNavigation $model */

$this->title = 'Create Backend Navigation';
$this->params['breadcrumbs'][] = ['label' => 'Backend Navigations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="backend-navigation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
