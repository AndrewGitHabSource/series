<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Series';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="series-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Series', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'text:ntext',
            'date',
            'image',
            'directors',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
