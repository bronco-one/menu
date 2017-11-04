<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Kategorie]].
 *
 * @see Kategorie
 */
class KategorieQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Kategorie[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Kategorie|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
