<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $id
 * @property string $nome
 * @property string $login
 * @property string $usuario_tableau
 * @property string $senha
 * @property integer $master_id
 *
 * The followings are the available model relations:
 * @property Banco[] $bancos
 * @property Campo[] $campos
 * @property Master $master
 * @property Csv[] $csvs
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, master_id', 'required'),
			array('id, master_id', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>128),
			array('login, usuario_tableau, senha', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, login, usuario_tableau, senha, master_id', 'safe', 'on'=>'search'),
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
			'bancos' => array(self::HAS_MANY, 'Banco', 'cliente_id'),
			'campos' => array(self::HAS_MANY, 'Campo', 'cliente_id'),
			'master' => array(self::BELONGS_TO, 'Master', 'master_id'),
			'csvs' => array(self::HAS_MANY, 'Csv', 'cliente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'login' => 'Login',
			'usuario_tableau' => 'Usuario Tableau',
			'senha' => 'Senha',
			'master_id' => 'Master',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('usuario_tableau',$this->usuario_tableau,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('master_id',$this->master_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
