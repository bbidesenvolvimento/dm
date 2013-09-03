<?php
/* @var $this CampoController */
/* @var $data Campo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamanho')); ?>:</b>
	<?php echo CHtml::encode($data->tamanho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padrao')); ?>:</b>
	<?php echo CHtml::encode($data->padrao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banco_id')); ?>:</b>
	<?php echo CHtml::encode($data->banco_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('campo_tipo_id')); ?>:</b>
	<?php echo CHtml::encode($data->campo_tipo_id); ?>
	<br />

	*/ ?>

</div>