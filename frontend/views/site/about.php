<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

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

            <h5 class="fw-bold">Motivation and overcoming challenges</h5>
            <p> My focus is on achieving my goal to always face challeging events with calm thoughts and a steady mind. This has helped me overcome multiple bugs and
                avoided time consuming restructuring.
            </p>

            <h5 class="fw-bold">Innovation and progress</h5>
            <p> After careful inspection of various frameworks and data structures I've aquired an overview that enables me to come up with interesting solutions. Furthermore
                I've reached a point  where code opimization and correctly implemented components have gained great importance.
            </p>
        </div>

        <div class="col-lg-2">
            <?php echo Html::img('@web/images/me.png', ['alt' => 'pic not found', 'width' => '275px', 'height' => '370px', 'class' => 'float-right pe-2']) ?>
        </div>
    
    </div>

    <div class="row">

        <div class="col-lg-4">
        <?php echo Html::img('@web/images/done.png', ['alt' => 'pic not found', 'width' => '175px', 'height' => '550px', 'class' => 'float-left']) ?>
        </div>

        <div class="col-lg-8">
        <?php echo Html::img('@web/images/task.png', ['alt' => 'pic not found', 'width' => '680px', 'height' => '850px', 'class' => 'float-left']) ?>
        </div>
        </div>

        <div class="row">
        <?php echo Html::img('@web/images/backend1.png', ['alt' => 'pic not found', 'width' => '650px', 'height' => '350px', 'class' => 'float-left']) ?>
        </div>


    </div>

<?php 
NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-sm navbar-light bg-white navbarmenuitems',
    ],
]);

$menuItems = array();

/* SIGNUP */

if (Yii::$app->user->isGuest) {
    array_push($menuItems, ['label' => 'Signup', 'url' => ['/site/signup']]);
}

echo Nav::widget([
    'options' => ['class' => 'd-flex ms-auto  me-5 pe-2 '],
    'items' => $menuItems,
]);

/* LOGIN / LOGOUT */

if (Yii::$app->user->isGuest) {
    echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
} else {
    echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout text-decoration-none']
        )
        . Html::endForm();
}

NavBar::end();?>