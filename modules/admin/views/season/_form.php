<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;



/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Season */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="season-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>



    <?php
    echo $form->field($model, 'text_description')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);
    ?>

    <?= $form->field($model, 'start_date')->widget(yii\jui\DatePicker::className(), ['clientOptions' => ['defaultDate' => '2014-01-01']]) ?>

    <?= $form->field($model, 'end_date')->widget(yii\jui\DatePicker::className(), ['clientOptions' => ['defaultDate' => '2014-01-01']]) ?>



    <div class="form-group field-select has-success">
        <label>Сериал</label>
        <select class="form-control" name="Season[id_series]">
            <?php foreach ($model->getAllSeries() as $item){ ?>
                <option <?php if($item->id == $model->id_series){ echo 'selected'; } ?> value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
            <?php } ?>
        </select>
    </div>



    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
