<?php

namespace enestelli\Oyun\models;

use Yii;

/**
 * This is the model class for table "oyun".
 *
 * @property int $id
 * @property string $isim
 * @property string $yayimci
 * @property int $yayinYili
 * @property string $tur
 *
 * @property Oyuntur $tur0
 */
class Oyun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oyun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'yayimci', 'yayinYili', 'tur'], 'required'],
            [['yayinYili'], 'integer'],
            [['isim', 'yayimci', 'tur'], 'string', 'max' => 50],
            [['tur'], 'exist', 'skipOnError' => true, 'targetClass' => Oyuntur::className(), 'targetAttribute' => ['tur' => 'tur']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'yayimci' => 'Yayimci',
            'yayinYili' => 'Yayin Yili',
            'tur' => 'Tur',
        ];
    }

    /**
     * Gets query for [[Tur0]].
     *
     * @return \yii\db\ActiveQuery|OyunturQuery
     */
    public function getTur0()
    {
        return $this->hasOne(Oyuntur::className(), ['tur' => 'tur']);
    }

    /**
     * {@inheritdoc}
     * @return OyunQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OyunQuery(get_called_class());
    }
}
