<?php
/* @var $this CampoController */
/* @var $model Campo */

$this->breadcrumbs=array(
	'Campos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Campo', 'url'=>array('index')),
	array('label'=>'Create Campo', 'url'=>array('create')),
	array('label'=>'Update Campo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Campo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Campo', 'url'=>array('admin')),
);
?>

<h1>View Campo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'tipo',
		'tamanho',
		'padrao',
		'banco_id',
		'cliente_id',
		'campo_tipo_id',
	),
)); ?>
