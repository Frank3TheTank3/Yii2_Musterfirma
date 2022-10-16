<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "languages".
 *
 * @property int $id
 * @property string $languageNames
 * @property string $languageText
 */
class Languages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'languages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['languageNames', 'languageText'], 'required'],
            [['languageNames', 'languageText'], 'string', 'max' => 255],
            [['languageNames'], 'unique'],
            [['languageText'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'languageNames' => 'Language Names',
            'languageText' => 'Language Text',
        ];
    }
}
