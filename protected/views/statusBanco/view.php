<?php
/* @var $this StatusBancoController */
/* @var $model StatusBanco */

$this->breadcrumbs=array(
	'Status Bancos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar StatusBanco', 'url'=>array('index')),
	array('label'=>'Criar StatusBanco', 'url'=>array('create')),
	array('label'=>'Atualizar StatusBanco', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar StatusBanco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja deletar este item?')),
	array('label'=>'Gerenciar StatusBanco', 'url'=>array('admin')),
);
?>

<h1>Visualizar StatusBanco #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
