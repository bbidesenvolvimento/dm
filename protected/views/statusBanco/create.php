<?php
/* @var $this StatusBancoController */
/* @var $model StatusBanco */

$this->breadcrumbs=array(
	'Status Bancos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StatusBanco', 'url'=>array('index')),
	array('label'=>'Manage StatusBanco', 'url'=>array('admin')),
);
?>

<h1>Create StatusBanco</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>