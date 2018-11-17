<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%services}}".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $img
 * @property int $status
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%services}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'status'], 'integer'],
            [['description'], 'string'],
            [['title', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'img' => 'Img',
            'status' => 'Status',
        ];
    }
}
