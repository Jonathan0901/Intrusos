<?php

namespace app\vendor\joan\intrusos\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $sta_id
 * @property string|null $sta_nombre
 *
 * @property File[] $files
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sta_nombre'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sta_id' => 'Sta ID',
            'sta_nombre' => 'Sta Nombre',
        ];
    }

    /**
     * Gets query for [[Files]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFiles()
    {
        return $this->hasMany(File::className(), ['fil_fkstatus' => 'sta_id']);
    }
}
