<?php
    use frontend\models\Carousel;
    use yii\bootstrap5\Html;
    use frontend\models\Navigation;
    use frontend\models\Languages;
    use yii\bootstrap5\Nav;
    use yii\bootstrap5\NavBar;
    //Navbar languages
    NavBar::begin([
        'options' => [
            'class' => 'navbar navbar-expand-sm navbar-light bg-white pe-4 navbarlanguages',
        ],
        
    ]);
    
    $languages = Languages::find()->orderBy('id')->all();
    $menuItems = array();

    foreach($languages as $lang)
    { 
        if($lang->id != 4)
        {
        array_push($menuItems, 
        
        Html::beginForm(['/site/index'], 'post', ['class' => 'd-flex'])
        . Html::submitButton($lang->languageNames, ['name' => 'languagechange', 'value' => $lang->id, 'id' => 'btn-lang'.$lang->id])
        . Html::endForm()
        );}
    }

    echo Nav::widget([
        'options' => ['class' => 'd-flex ms-auto'],
        'items' => $menuItems,
    ]);

    NavBar::end();

    //Navbar navigation
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-sm navbar-light bg-white navbarmenuitems',
        ],
    ]);

    $navigation = Navigation::find()->orderBy('id')->all();
    $menuItems = array();

    foreach($navigation as $nav)
    {
        
            array_push($menuItems, ['label' => $nav->navigationElementName, 'url' => [$nav->navigationElementRouteName]]);
        
    }

    /* SIGNUP */

    /*if (Yii::$app->user->isGuest) {
        array_push($menuItems, ['label' => 'Signup', 'url' => ['/site/signup']]);
    }*/

    echo Nav::widget([
        'options' => ['class' => 'd-flex ms-auto  me-5 pe-2 '],
        'items' => $menuItems,
    ]);

    /* LOGIN / LOGOUT */

    /*if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
    }*/

    NavBar::end();
?>