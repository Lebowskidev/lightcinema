<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userdatesearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userdate-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'date_up') ?>

    <?php // echo $form->field($model, 'date_now') ?>

    <div class="form-group">
        <?= Html::submitButton('Оновити', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Заново', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
