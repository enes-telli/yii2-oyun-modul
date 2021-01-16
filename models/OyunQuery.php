<?php

namespace backend\modules\Oyun\models;

/**
 * This is the ActiveQuery class for [[Oyun]].
 *
 * @see Oyun
 */
class OyunQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Oyun[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Oyun|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
