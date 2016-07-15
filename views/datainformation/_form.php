<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datainformation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datainformation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sen')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
