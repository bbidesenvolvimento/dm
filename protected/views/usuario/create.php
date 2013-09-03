<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Usuario', 'url'=>array('index')),
	array('label'=>'Gerenciar Usuario', 'url'=>array('admin')),
);
?>

<h1>Criar Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>