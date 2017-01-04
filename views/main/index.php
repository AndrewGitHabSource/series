<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="main-content container-fluid">
        <div class="row">
            <?php foreach ($series as $item): ?>
                <div class="series col-lg-2">
                    <h4><?php echo $item->name ?></h4>

                    <img src="<?php echo $item->image ?>">

                    <a href="<?= \yii\helpers\Url::to(['series/index', 'id' => $item->id]) ?>">Смотреть</a>

                    <div class="short-description left-panel">
                        <p class="desc-header">Описание</p>
                        <ul>
                            <li><span>Качество:</span><?php echo $item->quality ?></li>
                            <li><span>Режисер:</span><?php echo $item->directors ?></li>
                            <li><span>Актеры:</span><?php echo $item->actors ?></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
