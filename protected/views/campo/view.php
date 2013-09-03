<?php
/* @var $this CampoController */
/* @var $model Campo */

$this->breadcrumbs=array(
	'Campos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Campo', 'url'=>array('index')),
	array('label'=>'Criar Campo', 'url'=>array('create')),
	array('label'=>'Atualizar Campo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Campo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja deletar este item?')),
	array('label'=>'Gerenciar Campo', 'url'=>array('admin')),
);
?>

<h1>Visualizar Campo #<?php echo $model->id; ?></h1>

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
