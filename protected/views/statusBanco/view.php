<?php
/* @var $this StatusBancoController */
/* @var $model StatusBanco */

$this->breadcrumbs=array(
	'Status Bancos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StatusBanco', 'url'=>array('index')),
	array('label'=>'Create StatusBanco', 'url'=>array('create')),
	array('label'=>'Update StatusBanco', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StatusBanco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StatusBanco', 'url'=>array('admin')),
);
?>

<h1>View StatusBanco #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
