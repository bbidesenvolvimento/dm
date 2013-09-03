<?php
/* @var $this BancoController */
/* @var $model Banco */

$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Banco', 'url'=>array('index')),
	array('label'=>'Criar Banco', 'url'=>array('create')),
	array('label'=>'Atualizar Banco', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Banco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja deletar este item?')),
	array('label'=>'Gerenciar Banco', 'url'=>array('admin')),
);
?>

<h1>Visualizar Banco #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'status_banco_id',
		'cliente_id',
	),
)); ?>
