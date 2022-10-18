<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "languages".
 *
 * @property int $id
 * @property string $languageNames
 * @property string $languageText
 */
class BackendLanguages extends \yii\db\ActiveRecord
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
            [['languageText'], 'string'],
            [['languageNames'], 'string', 'max' => 255],
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
