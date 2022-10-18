<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\BackendLanguages $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="backend-languages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'languageNames')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'languageText')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
