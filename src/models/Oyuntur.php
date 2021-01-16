<?php

namespace enestelli\Oyun\models;

use Yii;

/**
 * This is the model class for table "oyuntur".
 *
 * @property string $tur
 *
 * @property Oyun[] $oyuns
 */
class Oyuntur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oyuntur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tur'], 'required'],
            [['tur'], 'string', 'max' => 50],
            [['tur'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tur' => 'Tur',
        ];
    }

    /**
     * Gets query for [[Oyuns]].
     *
     * @return \yii\db\ActiveQuery|OyunQuery
     */
    public function getOyuns()
    {
        return $this->hasMany(Oyun::className(), ['tur' => 'tur']);
    }

    /**
     * {@inheritdoc}
     * @return OyunturQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OyunturQuery(get_called_class());
    }
}
