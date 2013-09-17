<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
//	array('label'=>'Listar Cliente', 'url'=>array('index')),
//	array('label'=>'Criar Cliente', 'url'=>array('create')),
//	array('label'=>'Visualizar Cliente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Voltar', 'url'=>array('admin')),
);
?>

<h1>Atualizar Cliente <?php echo $model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'masters'=>$masters,'m'=>$m)); ?>