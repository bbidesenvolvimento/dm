<?php
/* @var $this BancoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bancos',
);

$this->menu=array(
	array('label'=>'Create Banco', 'url'=>array('create')),
	array('label'=>'Manage Banco', 'url'=>array('admin')),
);
?>

<h1>Bancos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
