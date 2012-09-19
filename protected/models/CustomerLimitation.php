<?php

/**
 * This is the model class for table "customer_limitation".
 *
 * The followings are the available columns in table 'customer_limitation':
 * @property integer $id_customer
 * @property integer $multi_invoice
 * @property double $credit_limit
 * @property boolean $blocked
 * @property string $update_date
 * @property string $create_date
 * @property integer $create_by
 * @property integer $update_by
 */
class CustomerLimitation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CustomerLimitation the static model class
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
		return 'customer_limitation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_customer, credit_limit, blocked, update_date, create_date, create_by, update_by', 'required'),
			array('id_customer, multi_invoice, create_by, update_by', 'numerical', 'integerOnly'=>true),
			array('credit_limit', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_customer, multi_invoice, credit_limit, blocked, update_date, create_date, create_by, update_by', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_customer' => 'Id Customer',
			'multi_invoice' => 'Multi Invoice',
			'credit_limit' => 'Credit Limit',
			'blocked' => 'Blocked',
			'update_date' => 'Update Date',
			'create_date' => 'Create Date',
			'create_by' => 'Create By',
			'update_by' => 'Update By',
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

		$criteria->compare('id_customer',$this->id_customer);
		$criteria->compare('multi_invoice',$this->multi_invoice);
		$criteria->compare('credit_limit',$this->credit_limit);
		$criteria->compare('blocked',$this->blocked);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_by',$this->create_by);
		$criteria->compare('update_by',$this->update_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}