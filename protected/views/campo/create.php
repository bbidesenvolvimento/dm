<?php
/* @var $this CampoController */
/* @var $model Campo */

$this->breadcrumbs=array(
	'Campos'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Campo', 'url'=>array('index')),
	array('label'=>'Gerenciar Campo', 'url'=>array('admin')),
);
?>

<h1>Criar Campo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>