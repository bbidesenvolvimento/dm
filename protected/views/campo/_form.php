<?php
/* @var $this CampoController */
/* @var $model Campo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'campo-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

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
		<?php echo $form->textField($model,'tamanho'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->