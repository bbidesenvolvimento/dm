<?php
/* @var $this CsvController */
/* @var $model Csv */

$this->breadcrumbs=array(
	'Csvs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Csv', 'url'=>array('index')),
	array('label'=>'Criar Csv', 'url'=>array('create')),
	array('label'=>'Visualizar Csv', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Csv', 'url'=>array('admin')),
);
?>

<h1>Atualizar Csv <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>