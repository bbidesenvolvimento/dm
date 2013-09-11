<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
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
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_tableau'); ?>
		<?php echo $form->textField($model,'usuario_tableau',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usuario_tableau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'master_id'); ?>
		<?php $lmaster = CHtml::listData($masters,'id','nome');?>
		<?php if($model->isNewRecord) :  ?>
		<?php echo CHtml::dropDownList('Cliente[master_id]','nome',$lmaster,array('prompt' => 'Selecione'));?>
		<?php else: ?>
		<?php $lm = CHtml::listData($m,'id','nome');?>
		<?php echo CHtml::dropDownList('Cliente[master_id]','nome',$lmaster,array('options' => array(key($lm) => array('selected'=>true))));?>
	<?php endif; ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->