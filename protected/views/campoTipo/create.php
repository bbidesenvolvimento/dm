<?php
/* @var $this CampoTipoController */
/* @var $model CampoTipo */

$this->breadcrumbs=array(
	'Campo Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CampoTipo', 'url'=>array('index')),
	array('label'=>'Manage CampoTipo', 'url'=>array('admin')),
);
?>

<h1>Create CampoTipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>