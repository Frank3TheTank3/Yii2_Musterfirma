<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\BackendCarousel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="backend-carousel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'carouselElementPath')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carouselElementDescription')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
