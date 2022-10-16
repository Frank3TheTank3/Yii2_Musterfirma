<?php

use yii\db\Migration;

/**
 * 
 * Class m221013_163752_languages_migration
 */
class m221013_163752_languages_migration extends Migration
{
    /**
     * 
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('languages', [
            'id' => $this->primaryKey(),
            'languageNames'=> $this->string()->notNull()->unique(),
            'languageText'=> $this->text()->notNull()->unique(),
        ]);

        $languagesDisplayText = 
        [

        'Lass den Schmerz selbst eine Last sein, aber sie beneideten* 
        die Nation Nonumy um eine solche Zeit, dass sie in großer Mühsal und Schmerzen steckte,*
        sondern die Fertigstellung des Hofes.* 
        Aber in der Tat werde ich sie anklagen und nur zwei Schmerzen und ich werde sie zurücknehmen.*
        Stet clita kasd gubergren, no sea takimata ist heilig.*
        Der Schmerz selbst ist sehr wichtig, aber es wird sehr lange dauern*
        Sie beneideten, dass es etwas Großes mit Arbeit und Schmerzen war, aber die Zufriedenheit des Heims.
        /
        Aber in der Tat werde ich sie anklagen und nur zwei Schmerzen und ich werde sie zurücknehmen.
        Stet clita kasd gubergren, no sea takimata ist heilig.', 

        'Let the pain itself be a burden, but they envied* 
        the nation nonumy for such a time that it was in some great toil and pain,*
        but the completion of the yard.* 
        But indeed I will accuse them and just two pains and I will take them back.*
        Stet clita kasd gubergren, no sea takimata is holy.*
        The pain itself is very important, but it will take a very long time*
        They envied that it was something great with labor and pain, but the satisfaction of the home.
        /
        But indeed I will accuse them and just two pains and I will take them back.
        Stet clita kasd gubergren, no sea takimata is holy.', 

        'Deja que el dolor mismo sea una carga,*
        pero envidiaron a la nación nonumy por tanto tiempo que estuvo en grandes trabajos y dolores,*
        pero la terminación del patio. Pero en verdad los acusaré y solo dos dolores y los tomaré de vuelta.*
        Stet clita kasd gubergren, ningún mar takimata es sagrado.*
        El dolor en sí es muy importante, pero llevará mucho tiempo.*
        Envidiaron que fuera algo grande con trabajo y dolor, pero la satisfacción del hogar.*
        /
        Pero en verdad los acusaré y solo dos dolores y los tomaré de vuelta.
        Stet clita kasd gubergren, ningún mar takimata es sagrado.', 

        'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam*
         nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,*
         sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.* 
         Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.*
         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod* 
         tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
         /
         At vero eos et accusam et justo duo dolores et ea rebum. 
         Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'

        ];

        $languageShort = ['DE', 'EN', 'ES', 'Lat' ];

        for ($i=0; $i < 4; $i++) { 
            $this -> insert('languages', array(
                'languageNames'=> $languageShort[$i],
                'languageText'=> $languagesDisplayText[$i],
            ));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221013_163752_languages_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_163752_languages_migration cannot be reverted.\n";

        return false;
    }
    */
}

/*
'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 

        At vero eos et accusam et justo duo dolores et ea rebum. 
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
        
        'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 

        At vero eos et accusam et justo duo dolores et ea rebum. 
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 
*/