<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "players".
 *
 * @property int $id
 * @property string $p_name
 * @property int $p_status
 * @property string $p_image
 * @property int $p_cat
 */
class Players extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'players';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_name', 'p_cat'], 'required'],
            [['p_status', 'p_cat'], 'integer'],
            [['p_name', 'p_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'p_name' => 'P Name',
            'p_status' => 'P Status',
            'p_image' => 'P Image',
            'p_cat' => 'P Cat',
        ];
    }
}
