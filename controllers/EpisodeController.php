<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Season;
use app\models\Series;
use app\models\Episode;


class EpisodeController extends Controller
{
    public function actionIndex(){
        $id = Yii::$app->request->get('idSeason');
        $idEpisode = Yii::$app->request->get('id');
        $episode = Episode::find()->where(['id_season' => $id, 'id' => $idEpisode])->one();

        return $this->render('details', ['episode' => $episode]);
    }

    public function actionListEpisodes(){
        $id = Yii::$app->request->get('id');
        $episodes = Episode::find()->where(['id_season' => $id])->all();

        return $this->render('list', ['episodes' => $episodes, 'idSeason' => $id]);
    }
}
