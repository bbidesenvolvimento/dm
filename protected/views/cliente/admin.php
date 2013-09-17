<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	//array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Novo Cliente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cliente-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Clientes</h1>

<p>Digite o campo que deseja buscar ou utilize a  <?php echo CHtml::link('Busca avançada','#',array('class'=>'search-button')); ?></p>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array('model'=>$model,));?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model, 
	'columns'=>array(
		//'id',
		'nome',
		'login',
		'usuario_tableau',
		'senha',
		array('name'=>'master.nome', 
              'header'=>'Cliente Master'),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update} {delete}',
			'header' => 'Opções',
			'buttons'=>array
		    (
		        'update' => array
		        (
		            'url'=>'Yii::app()->createUrl("cliente/update/", array("id"=>$data->id,"m"=>$data->master_id))',
		        ),
		    )
		),
	),
)); ?>
