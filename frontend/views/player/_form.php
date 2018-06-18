<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Players */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="players-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'p_name')->textInput(['maxlength' => true]) ?>

    <?php  //echo $form->field($model, 'p_status')->textInput() ?>

    <?= $form->field($model, 'p_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_cat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
