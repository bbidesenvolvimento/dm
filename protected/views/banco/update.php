<?php
/* @var $this BancoController */
/* @var $model Banco */

$this->breadcrumbs=array(
	'Bancos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Banco', 'url'=>array('index')),
	array('label'=>'Criar Banco', 'url'=>array('create')),
	array('label'=>'Visualizar Banco', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Banco', 'url'=>array('admin')),
);
?>

<h1>Atualizar Banco <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>