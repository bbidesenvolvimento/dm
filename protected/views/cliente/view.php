<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Criar Cliente', 'url'=>array('create')),
	array('label'=>'Atualizar Cliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja deletar este item?')),
	array('label'=>'Gerenciar Cliente', 'url'=>array('admin')),
);
?>

<h1>Visualizar Cliente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'login',
		'usuario_tableau',
		'senha',
		'master_id',
	),
)); ?>
