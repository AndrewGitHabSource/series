<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Сериал';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?>: <span><?php echo $series->name ?></span></h1>

    <div class="main-content">
        <div class="series-description">
            <div class="short-description">
                <p class="desc-header">Описание</p>
                <ul>
                    <li><span>Качество:</span><?php echo $series->quality ?></li>
                    <li><span>Режисер:</span><?php echo $series->directors ?></li>
                    <li><span>Актеры:</span><?php echo $series->actors ?></li>
                </ul>
            </div>

            <p class="title-desc">Краткое содержание:</p>
            <p><?php echo $series->text ?></p>
        </div>

        <h4 class="title-seasons">Сезоны:</h4>
        <table class="table">
            <thead class="thead-default">
                <tr>
                    <td>Название</td>
                    <td>Дата начала</td>
                    <td>Дата окончания</td>
                    <td>Описание</td>
                </tr>
            </thead>
            <?php foreach ($seasons as $item): ?>
                <tr>
                    <td><?php echo $item->title ?></td>
                    <td><?php echo $item->start_date ?></td>
                    <td><?php echo $item->end_date ?></td>
                    <td><?php echo $item->text_description ?></td>
                    <td><a href="<?= \yii\helpers\Url::to(['episode/list-episodes', 'id' => $item->id]) ?>">Смотреть</a></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
