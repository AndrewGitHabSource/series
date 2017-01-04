<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Season;
use app\models\Series;


class SeriesController extends Controller
{
    public function actionIndex(){
        $id = Yii::$app->request->get('id');
        $seasons = Season::find()->where(['id_series' => $id])->all();
        $series = Series::find()->where(['id' => $id])->one();

        return $this->render('index', ['seasons' => $seasons, 'series' => $series]);
    }
}
