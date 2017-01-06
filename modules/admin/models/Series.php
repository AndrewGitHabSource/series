<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "series".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $date
 * @property string $keywords
 * @property string $description
 * @property string $image
 * @property string $quality
 * @property string $directors
 * @property string $actors
 */
class Series extends \yii\db\ActiveRecord
{

    public $image;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'series';
    }

    public function getSeason(){
        return $this->hasMany(Season::className(), ['id_series' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text', 'date', 'keywords', 'description', 'quality', 'directors', 'actors'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['name', 'keywords', 'description', 'directors', 'actors'], 'string', 'max' => 255],
            [['quality'], 'string', 'max' => 10],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'date' => 'Date',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'quality' => 'Quality',
            'directors' => 'Directors',
            'actors' => 'Actors',
        ];
    }

    public function upload(){
        if($this->validate()){
            $path = 'images/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }


}
