<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "navigation".
 *
 * @property int $id
 * @property string $navigationElementName
 * @property string $navigationElementRouteName
 */
class BackendNavigation extends \yii\db\ActiveRecord
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
            [['navigationElementName', 'navigationElementRouteName'], 'required'],
            [['navigationElementName', 'navigationElementRouteName'], 'string', 'max' => 255],
            [['navigationElementName'], 'unique'],
            [['navigationElementRouteName'], 'unique'],
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
            'navigationElementRouteName' => 'Navigation Element Route Name',
        ];
    }
}
