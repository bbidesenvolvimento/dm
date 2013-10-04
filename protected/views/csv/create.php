<?php
/* @var $this CsvController */
/* @var $model Csv */

$this->breadcrumbs=array(
	'Csvs'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Csv', 'url'=>array('index')),
	array('label'=>'Gerenciar Csv', 'url'=>array('admin')),
);
?>

<h1>Criar Csv</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'cli'=>$cli)); ?>