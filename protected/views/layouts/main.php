<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'CSV', 'url'=>array('/importcsv'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Clientes', 'url'=>array('/cliente/admin'),'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Clientes Master', 'url'=>array('/master/admin'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Bases de Dados', 'url'=>array('/banco/admin'),'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Status Banco', 'url'=>array('/statusBanco'),'visible'=>(Yii::app()->user->id=='admin' ? 1 : 0)),
				//array('label'=>'Campos', 'url'=>array('/campo'),'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Campo Tipo', 'url'=>array('/campoTipo'),'visible'=>(Yii::app()->user->id=='admin' ? 1 : 0)),
				//array('label'=>'Log', 'url'=>array('/log'),'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Usuarios', 'url'=>array('/usuario'),'visible'=>!Yii::app()->user->isGuest),
				/*array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),*/
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> BBI.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
