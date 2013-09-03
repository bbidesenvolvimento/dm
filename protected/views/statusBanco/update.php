<?php
/* @var $this StatusBancoController */
/* @var $model StatusBanco */

$this->breadcrumbs=array(
	'Status Bancos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StatusBanco', 'url'=>array('index')),
	array('label'=>'Create StatusBanco', 'url'=>array('create')),
	array('label'=>'View StatusBanco', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StatusBanco', 'url'=>array('admin')),
);
?>

<h1>Update StatusBanco <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>