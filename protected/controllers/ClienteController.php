<?php

class ClienteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
			);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
				),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
				),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
				),
			array('deny',  // deny all users
				'users'=>array('*'),
				),
			);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Cliente;
		$banco=new Banco;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$masters = Master::model()->findAllByAttributes(array('ativo'=>1));

		if(isset($_POST['Cliente']))
		{
			$model->attributes=$_POST['Cliente'];
			$nome_base = trim('bbi_'.$_POST['Cliente']['login']);
			$sql = "CREATE SCHEMA ".$nome_base." DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
			
			//Registra cliente
			if($model->save()){
				//Registra base
				$banco->nome=$nome_base;
				$banco->status_banco_id = 1;
				$banco->cliente_id = $model->getPrimaryKey();
				if($banco->save()){
					//Cria Base de Dados no servidor e muda a collation
					$command=Yii::app()->db->beginTransaction();
					try
					{	
						Yii::app()->db->createCommand($sql)->execute();
						$command->commit();
					}
					catch(Exception $e)
					{
						echo "Erro ao criar base de dados. Verifique nome da base: ".$e->getMessage()."\n";
						$command->rollback();
						return false;
					}
					//Volta para o admin
					$this->redirect(array('admin'));
				}
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'masters' => $masters
			));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$m = Master::model()->findAllByPk(array('id'=>$_GET['m']));
		$masters = Master::model()->findAllByAttributes(array('ativo'=>1));

		$this->performAjaxValidation($model);

		if(isset($_POST['Cliente']))
		{
			$model->attributes=$_POST['Cliente'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'masters' => $masters,
			'm' => $m
			));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$base = Banco::model()->findByAttributes(array('cliente_id' => $id));

		$sql = 'DROP SCHEMA `'.$base->nome.'`;';
		$command=Yii::app()->db->createCommand($sql);
		$command->execute();

		$banco = Banco::model()->deleteAllByAttributes(array('cliente_id' => $id));

		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax'])){
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cliente');

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cliente('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cliente']))
			$model->attributes=$_GET['Cliente'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Cliente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cliente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
