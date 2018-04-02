<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramCode */

$this->title = Yii::t('app', 'Update Program Code: {nameAttribute}', [
    'nameAttribute' => $model->pc_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Program Codes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pc_id, 'url' => ['view', 'id' => $model->pc_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="program-code-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
