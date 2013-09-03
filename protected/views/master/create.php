<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Master', 'url'=>array('index')),
	array('label'=>'Gerenciar Master', 'url'=>array('admin')),
);
?>

<h1>Criar Master</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>