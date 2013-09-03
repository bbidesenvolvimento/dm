<?php
/* @var $this CampoController */
/* @var $model Campo */

$this->breadcrumbs=array(
	'Campos'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Listar Campo', 'url'=>array('index')),
	array('label'=>'Criar Campo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('campo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Campos</h1>

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
	'id'=>'campo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nome',
		'tipo',
		'tamanho',
		'padrao',
		'banco_id',
		/*
		'cliente_id',
		'campo_tipo_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
