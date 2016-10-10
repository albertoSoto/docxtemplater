<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Tipos de templates</h2>
                <p>
                    <?= Html::a('Ver', ['/category/'], ['class' => 'btn btn-primary']) ?>
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Documentos</h2>
                <p><?= Html::a('Ver', ['/template/'], ['class' => 'btn btn-primary']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Gii</h2>
                <p><?= Html::a('Ver', ['/gii/'], ['class' => 'btn btn-primary']) ?></p>
            </div>
        </div>
    </div>
</div>
