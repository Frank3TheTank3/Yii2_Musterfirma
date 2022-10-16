<?php

use yii\db\Migration;

/**
 * Class m221013_132156_navigation_migration
 */
class m221013_132156_navigation_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this -> createTable('navigation', [
            'id' => $this->primaryKey(),
            'navigationElementName'=> $this->string()->notNull()->unique(),
            'navigationElementRouteName'=> $this->string()->notNull()->unique(),
        ]);

        $navElementNames = ['HOME', 'ÜBER UNS', 'MUSTERMENÜ', 'MUSTERMENÜ2', 'KONTAKT'];
        $navElementRouteNames = ['/site/index', '/site/about', '/site/menu', '/site/menu2', '/site/contact'];

        for ($i=0; $i < 5; $i++) { 
            $this -> insert('navigation', array(
                'navigationElementName'=>$navElementNames[$i],
                'navigationElementRouteName'=>$navElementRouteNames[$i]
            ));
        }
       
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221013_132156_navigation_migration cannot be reverted.\n";

        return false;
    }

}
