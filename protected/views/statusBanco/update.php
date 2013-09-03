<?php
/* @var $this StatusBancoController */
/* @var $model StatusBanco */

$this->breadcrumbs=array(
	'Status Bancos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar StatusBanco', 'url'=>array('index')),
	array('label'=>'Criar StatusBanco', 'url'=>array('create')),
	array('label'=>'Visualizar StatusBanco', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar StatusBanco', 'url'=>array('admin')),
);
?>

<h1>Atualizar StatusBanco <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>