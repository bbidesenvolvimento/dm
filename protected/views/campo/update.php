<?php
/* @var $this CampoController */
/* @var $model Campo */

$this->breadcrumbs=array(
	'Campos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Campo', 'url'=>array('index')),
	array('label'=>'Criar Campo', 'url'=>array('create')),
	array('label'=>'Visualizar Campo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Campo', 'url'=>array('admin')),
);
?>

<h1>Atualizar Campo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>