<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "msgs".
 *
 * @property integer $id
 * @property string $title
 * @property integer $category
 * @property string $description
 * @property string $source
 * @property integer $datetime
 */
class Msgs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'msgs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'source'], 'string'],
            [['category', 'datetime'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category' => 'Category',
            'description' => 'Description',
            'source' => 'Source',
            'datetime' => 'Datetime',
        ];
    }
}
