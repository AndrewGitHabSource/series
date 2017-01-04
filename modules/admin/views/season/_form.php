<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Season */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="season-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model,'start_date')->widget(yii\jui\DatePicker::className(),['clientOptions' => ['defaultDate' => '2014-01-01']]) ?>

    <?= $form->field($model,'end_date')->widget(yii\jui\DatePicker::className(),['clientOptions' => ['defaultDate' => '2014-01-01']]) ?>

    <?= $form->field($model, 'id_series')->textInput() ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
