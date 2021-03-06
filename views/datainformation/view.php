<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Datainformation */

$this->title = $model->pi;
$this->params['breadcrumbs'][] = ['label' => 'Datainformations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datainformation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->pi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->pi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pi',
            'nam',
            'dat:ntext',
            'sen:ntext',
            'img:ntext',
        ],
    ]) ?>

</div>
