<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Master', 'url'=>array('index')),
	array('label'=>'Criar Master', 'url'=>array('create')),
	array('label'=>'Visualizar Master', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Master', 'url'=>array('admin')),
);
?>

<h1>Atualizar Master <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>