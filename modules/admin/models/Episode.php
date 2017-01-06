<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "episode".
 *
 * @property integer $id
 * @property string $title
 * @property string $description_episode
 * @property integer $id_season
 * @property string $image
 * @property integer $rating
 */
class Episode extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function getSeason(){
        return $this->hasOne(Season::className(), ['id' => 'id_season']);
    }

    public function getAllSeasons(){
        $data = Season::find()->all();
        return $data;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'episode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description_episode', 'id_season', 'rating'], 'required'],
            [['description_episode'], 'string'],
            [['id_season', 'rating'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'description_episode' => 'Описание',
            'id_season' => 'Сезон',
            'image' => 'Изображение',
            'rating' => 'Рейтинг',
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
