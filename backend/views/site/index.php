<?php
  use yii\bootstrap5\Html;
/** @var yii\web\View $this */

$this->title = 'Example Backend Database';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h2 class="display-4 mb-5 mt-5">'The Muster Construction Website' Database</h2>

       
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Add new languages</h2>

                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt" might sound 
                    like a cool language but didn't you ever want to exchange it for something else? Well as an administrator
                    you have the super user rights to do so!
                </p>

                    <?php 
                  
                    echo Html::tag('div',Html::a('Add a new language to the database',['/backend-languages/index'],
                    ['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]); ?>

            </div>
            
            <div class="col-lg-4">
                <h2>Add new navigation</h2>

                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt" might sound 
                    like a cool language but didn't you ever want to exchange it for something else? Well as an administrator
                    you have the super user rights to do so!
                </p>

                    <?php 
                    echo Html::tag('div',Html::a('Add a new language to the database',['/backend-navigation/index'],
                    ['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]); ?>

            </div>
            <div class="col-lg-4">
                <h2>Add new carousel images</h2>

                <p>Add cat images. Cats are construction cranes capabable of lifting many tons of dirt. Add pictures
                    of holes or pictures of filled up holes. The possibilities are endless.
                </p>

                    <?php 
                    echo Html::tag('div',Html::a('Add a new language to the database',['/backend-carousel/index'],
                    ['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]); ?>

            </div>
        </div>

    </div>
</div>
