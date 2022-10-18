<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\BackendNavigation $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="backend-navigation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'navigationElementName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'navigationElementRouteName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
