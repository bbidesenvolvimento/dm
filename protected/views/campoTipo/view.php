<?php
/* @var $this CampoTipoController */
/* @var $model CampoTipo */

$this->breadcrumbs=array(
	'Campo Tipos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CampoTipo', 'url'=>array('index')),
	array('label'=>'Create CampoTipo', 'url'=>array('create')),
	array('label'=>'Update CampoTipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CampoTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CampoTipo', 'url'=>array('admin')),
);
?>

<h1>View CampoTipo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
