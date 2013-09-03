<?php
/* @var $this CampoController */
/* @var $model Campo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'campo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tamanho'); ?>
		<?php echo $form->textField($model,'tamanho',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tamanho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'padrao'); ?>
		<?php echo $form->textField($model,'padrao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'padrao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banco_id'); ?>
		<?php echo $form->textField($model,'banco_id'); ?>
		<?php echo $form->error($model,'banco_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id'); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo_tipo_id'); ?>
		<?php echo $form->textField($model,'campo_tipo_id'); ?>
		<?php echo $form->error($model,'campo_tipo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->