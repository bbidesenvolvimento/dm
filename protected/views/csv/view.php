<?php
/* @var $this CsvController */
/* @var $model Csv */

$this->breadcrumbs=array(
	'Csvs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Csv', 'url'=>array('index')),
	array('label'=>'Criar Csv', 'url'=>array('create')),
	array('label'=>'Atualizar Csv', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Csv', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja deletar este item?')),
	array('label'=>'Gerenciar Csv', 'url'=>array('admin')),
);
?>

<h1>Visualizar Csv #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'local',
		'tamanho',
		'cliente_id',
	),
)); ?>
