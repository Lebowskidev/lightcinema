<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Krg */

$this->title = $model->pi;
$this->params['breadcrumbs'][] = ['label' => 'Krgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="krg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pi], [
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
        ],
    ]) ?>

</div>
