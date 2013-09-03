<?php
/* @var $this CampoTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Campo Tipos',
);

$this->menu=array(
	array('label'=>'Create CampoTipo', 'url'=>array('create')),
	array('label'=>'Manage CampoTipo', 'url'=>array('admin')),
);
?>

<h1>Campo Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
