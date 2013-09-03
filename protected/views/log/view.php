<?php
/* @var $this LogController */
/* @var $model Log */

$this->breadcrumbs=array(
	'Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Log', 'url'=>array('index')),
	array('label'=>'Criar Log', 'url'=>array('create')),
	array('label'=>'Atualizar Log', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Log', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja deletar este item?')),
	array('label'=>'Gerenciar Log', 'url'=>array('admin')),
);
?>

<h1>Visualizar Log #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipo',
		'descrição',
		'data',
		'csv_id',
	),
)); ?>
