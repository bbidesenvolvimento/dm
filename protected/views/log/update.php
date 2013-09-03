<?php
/* @var $this LogController */
/* @var $model Log */

$this->breadcrumbs=array(
	'Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Log', 'url'=>array('index')),
	array('label'=>'Criar Log', 'url'=>array('create')),
	array('label'=>'Visualizar Log', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Log', 'url'=>array('admin')),
);
?>

<h1>Atualizar Log <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>