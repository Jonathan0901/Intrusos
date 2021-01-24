<?php

namespace app\vendor\joan\intrusos\models;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property int $fil_id
 * @property string $fil_nombre
 * @property string|null $fil_ruta
 * @property int|null $fil_fkstatus
 *
 * @property Status $filFkstatus
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fil_nombre'], 'required'],
            [['fil_fkstatus'], 'integer'],
            [['fil_nombre'], 'string', 'max' => 100],
            [['fil_ruta'], 'string', 'max' => 255],
            [['fil_fkstatus'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['fil_fkstatus' => 'sta_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fil_id' => 'Fil ID',
            'fil_nombre' => 'Fil Nombre',
            'fil_ruta' => 'Fil Ruta',
            'fil_fkstatus' => 'Fil Fkstatus',
        ];
    }

    /**
     * Gets query for [[FilFkstatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilFkstatus()
    {
        return $this->hasOne(Status::className(), ['sta_id' => 'fil_fkstatus']);
    }
}
