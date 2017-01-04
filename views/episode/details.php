<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Сериал';
?>
<div class="site-about">
    <h1><?php echo $episode->title ?></h1>

    <div class="main-content">
        <img src="<?php echo $episode->image ?>">

        <p>Оценка: <?php echo $episode->rating ?></p>

        <h5>Описание:</h5>
        <p><?php echo $episode->description_episode ?></p>
    </div>
</div>
