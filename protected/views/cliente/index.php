<?php
/* @var $this ClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes',
);

$this->menu=array(
	array('label'=>'Criar Cliente', 'url'=>array('create')),
	array('label'=>'Gerenciar Cliente', 'url'=>array('admin')),
);
?>

<h1>Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
