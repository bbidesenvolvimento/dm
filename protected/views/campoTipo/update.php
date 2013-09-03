<?php
/* @var $this CampoTipoController */
/* @var $model CampoTipo */

$this->breadcrumbs=array(
	'Campo Tipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar CampoTipo', 'url'=>array('index')),
	array('label'=>'Criar CampoTipo', 'url'=>array('create')),
	array('label'=>'Visualizar CampoTipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar CampoTipo', 'url'=>array('admin')),
);
?>

<h1>Atualizar CampoTipo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>