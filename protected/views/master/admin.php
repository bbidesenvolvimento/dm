<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Novo Cliente Master', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('master-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Clientes Master</h1>

<p>
Digite o campo que deseja buscar ou utilize a  <?php echo CHtml::link('Busca avançada','#',array('class'=>'search-button')); ?>
</p>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'master-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'nome',
		'usuario',
		'senha',
		'ativo',
		array(
			'template'=>'{update} {delete}',
			'header' => 'Opções',
			'class'=>'CButtonColumn'
		),
	),
)); ?>
