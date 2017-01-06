<?php

namespace app\models;

use Yii;
use yii\base\Model;


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


    public static function tableName(){
        return 'episode';
    }

    public function getSeason(){
        return $this->hasOne(Season::className(), ['id' => 'id_season']);
    }
}
