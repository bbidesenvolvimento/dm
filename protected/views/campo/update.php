<?php
/* @var $this CampoController */
/* @var $model Campo */

$this->breadcrumbs=array(
	'Campos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Campo', 'url'=>array('index')),
	array('label'=>'Create Campo', 'url'=>array('create')),
	array('label'=>'View Campo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Campo', 'url'=>array('admin')),
);
?>

<h1>Update Campo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>