<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Master', 'url'=>array('index')),
	array('label'=>'Criar Master', 'url'=>array('create')),
	array('label'=>'Atualizar Master', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Master', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja deletar este item?')),
	array('label'=>'Gerenciar Master', 'url'=>array('admin')),
);
?>

<h1>Visualizar Master #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'usuario',
		'senha',
		'ativo',
	),
)); ?>
