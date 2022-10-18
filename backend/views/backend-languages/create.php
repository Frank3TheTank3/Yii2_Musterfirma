<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\BackendLanguages $model */

$this->title = 'Create Backend Languages';
$this->params['breadcrumbs'][] = ['label' => 'Backend Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="backend-languages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
