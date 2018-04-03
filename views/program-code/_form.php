<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramCode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-code-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pc_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pc_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pc_created_at')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(FALSE) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
