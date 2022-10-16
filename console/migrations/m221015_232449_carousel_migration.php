<?php

use yii\db\Migration;

/**
 * Class m221015_232449_carousel_migration
 */
class m221015_232449_carousel_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this -> createTable('carousel', [
            'id' => $this->primaryKey(),
            'carouselElementPath'=> $this->string()->notNull()->unique(),
            'carouselElementDescription'=> $this->string()->notNull()->unique(),
        ]);

        $carouselElementPathNames = ['@web/images/img1.png', '@web/images/img2.png', '@web/images/img3.png', '@web/images/img4.png', '@web/images/img5.png'];
        $carouselElementDescriptions = ['Hellmich Kran XY', 'Kran XZ', 'Kran XY', 'Kran 3', 'Kran 4'];

        for ($i=0; $i < 5; $i++) { 
            $this -> insert('carousel', array(
                'carouselElementPath'=>$carouselElementPathNames[$i],
                'carouselElementDescription'=>$carouselElementDescriptions[$i]
            ));
        }
       
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221015_232449_carousel_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221015_232449_carousel_migration cannot be reverted.\n";

        return false;
    }
    */
}
