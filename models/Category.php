<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category"
 * 
 * @property int $id
 * @property string $title
 * @property string $desc
 * @property string $modifier
 * @property string $wrapper
 * 
 * @property Subcategory[] $subcategories
 */
class Category extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%category}}';
    }

    public function rules(): array
    {
        return [
            [['title'], 'trim'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 128],
            
            [['desc'], 'trim'],
            [['desc'], 'required'],
            [['desc'], 'string'],

            [['modifier'], 'trim'],
            [['modifier'], 'required'],
            [['modifier'], 'string', 'max' => 128],

            [['wrapper'], 'trim'],
            [['wrapper'], 'required'],
            [['wrapper'], 'string', 'max' => 128],
        ];
    }

    public function fields()
    {
        return [
            'id',
            'title',
            'desc',
            'modifier',
            'wrapper',
            'subcategories',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getSubcategories(): ActiveQuery
    {
        return $this->hasMany(Subcategory::class, ['category_id' => 'id']);
    }
}
