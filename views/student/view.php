<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Course;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = $model->stu_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->stu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->stu_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'stu_id',
            'stu_name:ntext',
            'stu_idNum',
            [
                'attribute' => 'pc_id',
                'format' => 'raw',
                'value' => function($model){
                    return $model->getPcDetail();
                }
            ],
            'stu_icNumber',
            [
                'attribute' => 'co_id',
                'format' => 'raw',
                'value' => function($model){
                    return Course::getAllCourse($model->pc_id);
                }
            ],
        ],
    ]) ?>

</div>
