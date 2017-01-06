<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Episodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="episode-index">

    <?php
    NavBar::begin();
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-center'],
        'items' => [
            ['label' => 'series', 'url' => ['/admin/series']],
            ['label' => 'season', 'url' => ['/admin/season']],
            ['label' => 'episode', 'url' => ['/admin/episode']]
        ],
    ]);
    NavBar::end();
    ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Episode', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'title',
            'description_episode:html',
            'id_season',
            'rating',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
