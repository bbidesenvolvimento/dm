<?php
/* @var $this StatusBancoController */
/* @var $model StatusBanco */

$this->breadcrumbs=array(
	'Status Bancos'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar StatusBanco', 'url'=>array('index')),
	array('label'=>'Gerenciar StatusBanco', 'url'=>array('admin')),
);
?>

<h1>Criar StatusBanco</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>