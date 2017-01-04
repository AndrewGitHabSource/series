<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "season".
 *
 * @property integer $id
 * @property string $title
 * @property string $text_description
 * @property string $start_date
 * @property string $end_date
 * @property integer $id_series
 * @property string $keywords
 * @property string $description
 */
class Season extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'season';
    }

    public function getSeries(){
        return $this->hasOne(Series::className(), ['id' => 'id_series']);
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text_description', 'start_date', 'end_date', 'id_series', 'keywords', 'description'], 'required'],
            [['text_description'], 'string'],
            [['start_date', 'end_date'], 'safe'],
            [['id_series'], 'integer'],
            [['title', 'keywords', 'description'], 'string', 'max' => 255],
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
            'text_description' => 'Text Description',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'id_series' => 'Id Series',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
