<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "carousel".
 *
 * @property int $id
 * @property string $carouselElementPath
 * @property string $carouselElementDescription
 */
class Carousel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carousel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['carouselElementPath', 'carouselElementDescription'], 'required'],
            [['carouselElementPath', 'carouselElementDescription'], 'string', 'max' => 255],
            [['carouselElementPath'], 'unique'],
            [['carouselElementDescription'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'carouselElementPath' => 'Carousel Element Path',
            'carouselElementDescription' => 'Carousel Element Description',
        ];
    }
}
