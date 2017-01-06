<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Season extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    
    public static function tableName(){
        return 'season';
    }

    public function getSeries(){
        return $this->hasOne(Series::className(), ['id' => 'id_series']);
    }

    public function getEpisodes(){
        return $this->hasMany(Episode::className(), ['id_season' => 'id']);
    }
}
