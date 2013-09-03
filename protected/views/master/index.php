<?php
/* @var $this MasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Masters',
);

$this->menu=array(
	array('label'=>'Criar Master', 'url'=>array('create')),
	array('label'=>'Gerenciar Master', 'url'=>array('admin')),
);
?>

<h1>Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
