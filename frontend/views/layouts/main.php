<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language?> " class="h-105">

        <head> 
            <meta charset="<?= Yii::$app->charset; ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <?php $this->registerCsrfMetaTags() ?>
            <title><?= Html::encode($this->title) ?></title>
            <?php $this->head() ?>
        </head>

        <body class="d-flex flex-column h-100">
            <div class="main-content">
                <?php $this->beginBody() ?>
                <header>
                <!-- NAVIGATION -->
                <?php echo \Yii::$app->view->renderFile('@app/views/site/navigation.php'); ?>
                </header>
                <!-- HR LINE -->
                <hr style="height:10px;border:none;color:#fde747;background-color:#fde747;opacity:1;" />
                <!-- MAIN CONTENT -->
                <main role="main" class="flex-shrink-0">
                    <div class="container">
                        <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
                        <?= Alert::widget() ?>
                        <!-- CONTENT INDEX -->
                        <?= $content ?>
                </main>
                <!-- FOOTER -->
                <?php echo \Yii::$app->view->renderFile('@app/views/site/footer.php'); ?>
                <?php $this->endBody() ?>
            </div>
        </body>

    </html>
<?php $this->endPage();