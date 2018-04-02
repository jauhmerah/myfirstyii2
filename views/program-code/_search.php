<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramCodeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-code-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pc_id') ?>

    <?= $form->field($model, 'pc_code') ?>

    <?= $form->field($model, 'pc_desc') ?>

    <?= $form->field($model, 'pc_is_deleted') ?>

    <?= $form->field($model, 'pc_created_at') ?>

    <?php // echo $form->field($model, 'pc_updated_at') ?>

    <?php // echo $form->field($model, 'pc_created_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
