<?php

namespace enestelli\Oyun\models;

/**
 * This is the ActiveQuery class for [[Oyuntur]].
 *
 * @see Oyuntur
 */
class OyunturQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Oyuntur[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Oyuntur|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
