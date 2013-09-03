<?php

/**
 * This is the model class for table "campo".
 *
 * The followings are the available columns in table 'campo':
 * @property integer $id
 * @property string $nome
 * @property string $tipo
 * @property string $tamanho
 * @property string $padrao
 * @property integer $banco_id
 * @property integer $cliente_id
 * @property integer $campo_tipo_id
 *
 * The followings are the available model relations:
 * @property Banco $banco
 * @property Cliente $cliente
 * @property CampoTipo $campoTipo
 */
class Campo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'campo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('banco_id, cliente_id, campo_tipo_id', 'required'),
			array('banco_id, cliente_id, campo_tipo_id', 'numerical', 'integerOnly'=>true),
			array('nome, tipo, tamanho, padrao', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, tipo, tamanho, padrao, banco_id, cliente_id, campo_tipo_id', 'safe', 'on'=>'search'),
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
			'banco' => array(self::BELONGS_TO, 'Banco', 'banco_id'),
			'cliente' => array(self::BELONGS_TO, 'Cliente', 'cliente_id'),
			'campoTipo' => array(self::BELONGS_TO, 'CampoTipo', 'campo_tipo_id'),
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
			'tipo' => 'Tipo',
			'tamanho' => 'Tamanho',
			'padrao' => 'Padrao',
			'banco_id' => 'Banco',
			'cliente_id' => 'Cliente',
			'campo_tipo_id' => 'Campo Tipo',
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
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('tamanho',$this->tamanho,true);
		$criteria->compare('padrao',$this->padrao,true);
		$criteria->compare('banco_id',$this->banco_id);
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('campo_tipo_id',$this->campo_tipo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Campo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
