<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "template".
 *
 * @property integer $id
 * @property string $title
 * @property string $abstract
 * @property string $description
 * @property string $content
 * @property integer $author_id
 * @property integer $category_id
 * @property string $update_time
 * @property string $create_time
 *
 * @property Category $category
 * @property DBUser $author
 */
class Template extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'template';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['abstract', 'description', 'content'], 'string'],
            [['author_id', 'category_id'], 'integer'],
            [['update_time', 'create_time'], 'safe'],
            [['title'], 'string', 'max' => 45],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => DBUser::className(), 'targetAttribute' => ['author_id' => 'id']],
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
            'abstract' => 'Abstract',
            'description' => 'Description',
            'content' => 'Content',
            'author_id' => 'Author ID',
            'category_id' => 'Category ID',
            'update_time' => 'Update Time',
            'create_time' => 'Create Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(DBUser::className(), ['id' => 'author_id']);
    }
}
