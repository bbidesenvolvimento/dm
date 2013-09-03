<?php
/* @var $this BancoController */
/* @var $model Banco */

$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Banco', 'url'=>array('index')),
	array('label'=>'Create Banco', 'url'=>array('create')),
	array('label'=>'View Banco', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Banco', 'url'=>array('admin')),
);
?>

<h1>Update Banco <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>