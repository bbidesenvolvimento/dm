<?php
/* @var $this StatusBancoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Status Bancos',
);

$this->menu=array(
	array('label'=>'Criar StatusBanco', 'url'=>array('create')),
	array('label'=>'Gerenciar StatusBanco', 'url'=>array('admin')),
);
?>

<h1>Status Bancos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
