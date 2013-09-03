<?php
/* @var $this LogController */
/* @var $model Log */

$this->breadcrumbs=array(
	'Logs'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Log', 'url'=>array('index')),
	array('label'=>'Gerenciar Log', 'url'=>array('admin')),
);
?>

<h1>Criar Log</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>