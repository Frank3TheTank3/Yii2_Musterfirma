<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "navigation".
 *
 * @property int $id
 * @property string $navigationElementName
 */
class Navigation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'navigation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['navigationElementName'], 'required'],
            [['navigationElementName'], 'string', 'max' => 255],
            [['navigationElementName'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'navigationElementName' => 'Navigation Element Name',
        ];
    }
}
