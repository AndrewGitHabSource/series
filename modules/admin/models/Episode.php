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
            [['title', 'description_episode', 'id_season', 'image', 'rating'], 'required'],
            [['description_episode'], 'string'],
            [['id_season', 'rating'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
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
            'id_season' => 'Id Season',
            'image' => 'Изображение',
            'rating' => 'Рейтинг',
        ];
    }
}
