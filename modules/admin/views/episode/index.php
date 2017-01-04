<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Episodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="episode-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Episode', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'title',
            'description_episode:ntext',
            'id_season',
            'image',
            'rating',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
