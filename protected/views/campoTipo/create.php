<?php
/* @var $this CampoTipoController */
/* @var $model CampoTipo */

$this->breadcrumbs=array(
	'Campo Tipos'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar CampoTipo', 'url'=>array('index')),
	array('label'=>'Gerenciar CampoTipo', 'url'=>array('admin')),
);
?>

<h1>Criar CampoTipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>