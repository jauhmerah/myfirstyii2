<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stu_id')->textInput() ?>

    <?= $form->field($model, 'stu_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stu_idNum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pc_id')->textInput() ?>

    <?= $form->field($model, 'stu_icNumber')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
