<?php
use yii\helpers\Html;
/** @var yii\web\View $this */
$this->title = 'Home';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <!-- HEADER 1 TITEL-->
            <h1 class="fw-bold">Dies ist die Titelschrift!</h1>
            <div class="col-lg-7">
                <!-- MAIN TEXT -->
                <?php
                //Get complete language text
                $displayText = $languages->languageText;
                //Explode into paragraphs
                $paragraphs = explode("/", $displayText);
                //Linebreaks
                for ($i = 0; $i < 2; $i++) {
                    foreach ($paragraphs as $subteile) {
                        $mySplitString = preg_split('/\*/', $subteile);
                        foreach ($mySplitString as $key) {
                            echo $key . '<br>';
                        }
                        echo '<br>';
                    }
                }
                ?>
            </div>
            <div class="col-lg-5">
                <!-- TRUCK IMAGE -->
                <?php echo Html::img('@web/images/truck.png', ['alt' => 'pic not found', 'width' => '270px', 'height' => '200px', 'class' => 'me-3']) ?>
            </div>
        </div>
    
        
    </div>
</div>
</div>
<?php echo \Yii::$app->view->renderFile('@app/views/site/carousel.php'); ?>