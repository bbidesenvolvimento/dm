<?php
/* @var $this BancoController */
/* @var $model Banco */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banco-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_banco_id'); ?>
		<?php //echo $form->textField($model,'status_banco_id'); ?>
		<?php echo $form->CheckBox($model,'status_banco_id',array('checked'=>'checked')); ?>
		<?php echo $form->error($model,'status_banco_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id'); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->