<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Інформація';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="list-group">
    <div class="list-group-item row">
        <div class="col-md-3">
            <img src="files/log1.jpg">
        </div>
        <div class="col-md-3 col-md-offset-3 ">
            <p class="text-justify">
                Історія кінотеатру починається з 2000 року. Це був грандіозний проект , архітектор Вадим Тирчук реалізував
                свої задуми саме тут. Власники надали йому повну свободу і він зробив кінотеатр чудовим. Перші глядачі
                дивились фільми на великому екрані який був спеціально замовлений для ідеального перегляду в HD. Звук
                це одна з головних складових чудового перегляду , тут використовується система dolby digital atmos.
                Тому наші глядачі отримували найкращу атмосферу у залі. Кінотеатр в 2005 році був зачинений черз пожежу,
                але в 2006 році він постав у  новому лиці. Було оновлено усе , навіть збільшилась кількість залів.
                Кінотеатр працює і по цей час.
            </p>
        </div>
        </div>
        <div class="list-group-item row">
            <div class="col-md-3">
                <h2>Буфет</h2>
            <img src="files/pic1.jpg">
                </div>
            </div>
        <div class="list-group-item row">
            <div class="col-md-3">
                <h2>Зал</h2>
                <img src="files/pic2.jpg">
                <br><br>
                <img src="files/pic3.jpg">
            </div>
            </div>
        </div>

</div>
