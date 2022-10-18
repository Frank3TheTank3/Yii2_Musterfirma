<?php
use frontend\models\Carousel;
use yii\bootstrap5\Html;
use kv4nt\owlcarousel\OwlCarouselWidget;

//Owl Carousel Widget Settings
OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'maincarousel',
        'class' => 'container-class ps-5 pe-5'
    ],
    'pluginOptions'    => [
        'autoplay'          => false,
        'autoplayTimeout'   => 3000,
        /*'autoWidth'         => true,*/
        'items'             => 5,
        'loop'              => true,
        'nav'               => true,
        'dots'              => false,
        'itemsDesktop'      => [1199, 5],
        'itemsDesktopSmall' => [979, 3]
    ]
]);

//Get carousel elements from the database
$carouselElement  = array();
$carouselElements = Carousel::find()->orderBy('id')->all();
for ($i=0; $i < count($carouselElements); $i++) { 
    $carouselElement[$i] = $carouselElements[$i];
}

?>

<!-- OWL CAROUSEL WIDGET IMAGES -->
<div class="item-class px-2 py-4">
    <div class="px-2 pt-2 pb-1  bg-white rounded">
        <?php echo Html::img($carouselElement[0]->carouselElementPath, ['alt' => 'pic not found', 'width' => '100%', 'height' => '50%']) ?>
        <p><?php echo $carouselElement[0]->carouselElementDescription?></p>
    </div>
</div>
<div class="item-class px-2 py-4">
    <div class="px-2 pt-2 pb-1  bg-white rounded">
        <?php echo Html::img($carouselElement[1]->carouselElementPath, ['alt' => 'pic not found', 'width' => '100%', 'height' => '50%']) ?>
        <p><?php echo $carouselElement[1]->carouselElementDescription?></p>
    </div>
</div>
<div class="item-class px-2 py-4">
    <div class="px-2 pt-2 pb-1  bg-white rounded">
        <?php echo Html::img($carouselElement[2]->carouselElementPath, ['alt' => 'pic not found', 'width' => '100%', 'height' => '50%']) ?>
        <p><?php echo $carouselElement[2]->carouselElementDescription?></p>
    </div>
</div>
<div class="item-class px-2 py-4">
    <div class="px-2 pt-2 pb-1  bg-white rounded">
        <?php echo Html::img($carouselElement[3]->carouselElementPath, ['alt' => 'pic not found', 'width' => '100%', 'height' => '50%']) ?>
        <p><?php echo $carouselElement[3]->carouselElementDescription?></p>
    </div>
</div>
<div class="item-class px-2 py-4">
    <div class="px-2 pt-2 pb-1  bg-white rounded">
        <?php echo Html::img($carouselElement[4]->carouselElementPath, ['alt' => 'pic not found', 'width' => '100%', 'height' => '50%']) ?>
        <p><?php echo $carouselElement[4]->carouselElementDescription?></p>
    </div>

</div>

<!-- CONTRUCTION VEHICLE ANIMATION IMAGE -->
<div class="item-class px-2 vehiclecenter ">
    <div class="px-2 pt-2 pb-1">
        <?php echo Html::img('@web/images/vehicle.png', ['alt' => 'pic not found', 'width' => '100%', 'class' => 'vehicle', 'height' => '100%']) ?>
    </div>
</div> 

<?php OwlCarouselWidget::end(); ?>

<?php
//Create jquery on click listenes for my customized owl carousel 'prev' and 'next' buttons
//Start animation by adding css class and removing after animation playtime (2s)
$script = <<< JS

$(document).ready(function() {
    
    let isFlipped = false;
    let drivingDirection = 'drive';
$('.owl-next').click(function(){
    
    if(isFlipped)
    { 
        $('.vehicle').removeClass('fliped');
        isFlipped = false;
        startVehicleAnimation();
    }
    else
    {
        startVehicleAnimation();
    }
    
});

$('.owl-prev').click(function(){
   
    $('.vehicle').addClass('fliped');
    isFlipped = true;
    startVehicleAnimation();
});

function startVehicleAnimation(){

    
    if(!isFlipped)
    {drivingDirection = 'drive'}
    else
    {drivingDirection = 'driveBack'}

    $('.vehicle').addClass(drivingDirection);

    setTimeout(
  function() 
  {
    $('.vehicle').removeClass(drivingDirection);
  }, 2000);


}

});

var windowsize = $(window).width();

$(window).resize(function() {
  windowsize = $(window).width();
  if (windowsize > 440) {
    //if the window is greater than 440px wide then turn on jScrollPane..
        $("#maincarousel").owlCarousel({
        loop:true,
        singleItem: true 
    });
  }
});



JS;

$this->registerJs($script);



?>