<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Сериал';
?>
<div class="site-about">
    <h1>Список серий сезона</h1>

    <div class="main-content">

        <table class="table">
            <thead>
                <tr>
                    <td>Картинка</td>
                    <td>Название</td>
                    <td>Рейтинг</td>
                    <td>Описание</td>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($episodes as $item){ ?>
                <tr>
                    <td>
                        <?php $mainImg = $item->getImage(); ?>

                        <?= Html::img($mainImg->getUrl('84x84'), ['alt' => ''])?>
                    </td>
                    <td><?php echo $item->title ?></td>
                    <td><?php echo $item->rating ?></td>
                    <td><?php echo $item->description_episode ?></td>
                    <td><a href="<?= \yii\helpers\Url::to(['episode/index', 'idSeason' => $idSeason, 'id' => $item->id]) ?>">Смотреть</a></td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
 
    </div>
</div>
