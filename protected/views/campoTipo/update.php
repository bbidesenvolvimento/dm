<?php
/* @var $this CampoTipoController */
/* @var $model CampoTipo */

$this->breadcrumbs=array(
	'Campo Tipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CampoTipo', 'url'=>array('index')),
	array('label'=>'Create CampoTipo', 'url'=>array('create')),
	array('label'=>'View CampoTipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CampoTipo', 'url'=>array('admin')),
);
?>

<h1>Update CampoTipo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>