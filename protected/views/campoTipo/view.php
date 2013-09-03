<?php
/* @var $this CampoTipoController */
/* @var $model CampoTipo */

$this->breadcrumbs=array(
	'Campo Tipos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar CampoTipo', 'url'=>array('index')),
	array('label'=>'Criar CampoTipo', 'url'=>array('create')),
	array('label'=>'Atualizar CampoTipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar CampoTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja deletar este item?')),
	array('label'=>'Gerenciar CampoTipo', 'url'=>array('admin')),
);
?>

<h1>Visualizar CampoTipo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
