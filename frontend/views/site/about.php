<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About me';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
    <div class="col-lg-8 mt-4">
    <h5 class="fw-bold">Quality and Passion</h5>
    <p>My name is Francis Nicholls and I'm the maker of the 'musterfirma' example page. The steep learing curve I experienced was mainly due to many of my projects being
        created with 'Laravel' in the past. I've learned greatly about the 'Yii2' PHP framework during this assignment and have been able to swiftly learn the new ways of handeling
        data. 
    </p>
    <h5 class="fw-bold">Ideas and digital craftmanship</h5>
    <p> Clarity in design is key. I believe that good content is a leading factor for coming up with ideas on how to approach the visual part of a website.
    </p>

    <h5 class="fw-bold">Ideas and digital craftmanship</h5>
    <p> Clarity in design is key. I believe that good content is a leading factor for coming up with ideas on how to approach the visual part of a website.
    </p>

    <h5 class="fw-bold">Innovation and progress</h5>
    <p> After carefull inspection of various frameworks and data structures I've aquired an overview that enables me to come up with interesting solutions. Furthermore
        I've reached a point  where code opimization and correctly implemented components have gained great importance.
    </p>
</div>
    <div class="col-lg-2">
    <?php echo Html::img('@web/images/me.png', ['alt' => 'pic not found', 'width' => '250px', 'height' => '370px', 'class' => 'float-right pe-2']) ?>
    </div>
  
    </div>
    <div class="row">
    <div class="col-lg-4">
    <?php echo Html::img('@web/images/done.png', ['alt' => 'pic not found', 'width' => '175px', 'height' => '550px', 'class' => 'float-left']) ?>
    </div>
    <div class="col-lg-8">
    <?php echo Html::img('@web/images/task.png', ['alt' => 'pic not found', 'width' => '650px', 'height' => '850px', 'class' => 'float-left']) ?>
    </div>
</div>
</div>