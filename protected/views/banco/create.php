<?php
/* @var $this BancoController */
/* @var $model Banco */

$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Banco', 'url'=>array('index')),
	array('label'=>'Gerenciar Banco', 'url'=>array('admin')),
);
?>

<h1>Criar Banco</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>