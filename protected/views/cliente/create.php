<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Gerenciar Cliente', 'url'=>array('admin')),
);
?>

<h1>Criar Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>