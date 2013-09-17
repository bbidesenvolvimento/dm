<?php

/**
 * This is the model class for table "master".
 *
 * The followings are the available columns in table 'master':
 * @property integer $id
 * @property string $nome
 * @property string $usuario
 * @property string $senha
 * @property integer $ativo
 *
 * The followings are the available model relations:
 * @property Cliente[] $clientes
 */
class Master extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Master the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ativo', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>45),
			array('usuario, senha', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, usuario, senha, ativo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'clientes' => array(self::HAS_MANY, 'Cliente', 'master_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			//'id' => 'ID',
			'nome' => 'Nome',
			'usuario' => 'Usuario',
			'senha' => 'Senha',
			'ativo' => 'Ativo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('ativo',$this->ativo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}