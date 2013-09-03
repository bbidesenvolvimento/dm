<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Master', 'url'=>array('index')),
	array('label'=>'Create Master', 'url'=>array('create')),
	array('label'=>'View Master', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Master', 'url'=>array('admin')),
);
?>

<h1>Update Master <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>