<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\articles\models\SearchCategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'alias') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'parent') ?>

    <?php // echo $form->field($model, 'published') ?>

    <?php // echo $form->field($model, 'access') ?>

    <?php // echo $form->field($model, 'ordering') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'image_caption') ?>

    <?php // echo $form->field($model, 'image_credits') ?>

    <?php // echo $form->field($model, 'params') ?>

    <?php // echo $form->field($model, 'metadesc') ?>

    <?php // echo $form->field($model, 'metakey') ?>

    <?php // echo $form->field($model, 'robots') ?>

    <?php // echo $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'copyright') ?>

    <?php // echo $form->field($model, 'language') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
