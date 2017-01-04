<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Series extends \yii\db\ActiveRecord
{
    public static function tableName(){
        return 'series';
    }

    public static function getAll(){
        $data = self::find()->all();
        return $data;
    }

    public function getSeasons(){
        return $this->hasMany(Season::className(), ['id_series' => 'id']);
    }
}
