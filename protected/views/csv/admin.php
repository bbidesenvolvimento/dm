<?php
/* @var $this CsvController */
/* @var $model Csv */

$this->breadcrumbs=array(
	'Csvs'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Listar Csv', 'url'=>array('index')),
	array('label'=>'Criar Csv', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('csv-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Csvs</h1>

<p>
Opcionalmente você pode utiliar simbolos de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no inicio de cada valor para refinar a pesquisa.
</p>

<?php echo CHtml::link('Busca avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'csv-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nome',
		'local',
		'tamanho',
		'cliente_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
