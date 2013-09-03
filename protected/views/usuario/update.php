<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Usuario', 'url'=>array('index')),
	array('label'=>'Criar Usuario', 'url'=>array('create')),
	array('label'=>'Visualizar Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Usuario', 'url'=>array('admin')),
);
?>

<h1>Atualizar Usuario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>