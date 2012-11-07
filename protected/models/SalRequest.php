<?php

/**
 * This is the model class for table "sal_request".
 *
 * The followings are the available columns in table 'sal_request':
 * @property integer $id_srequest
 * @property integer $create_by
 * @property string $create_date
 * @property integer $update_by
 * @property string $update_date
 *
 * The followings are the available model relations:
 * @property SrequestLine[] $srequestLines
 */
class SalRequest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalRequest the static model class
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
		return 'sal_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_srequest, create_by, create_date, update_by, update_date', 'required'),
			array('id_srequest, create_by, update_by', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_srequest, create_by, create_date, update_by, update_date', 'safe', 'on'=>'search'),
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
			'srequestLines' => array(self::HAS_MANY, 'SrequestLine', 'id_srequest'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_srequest' => 'Id Srequest',
			'create_by' => 'Create By',
			'create_date' => 'Create Date',
			'update_by' => 'Update By',
			'update_date' => 'Update Date',
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

		$criteria->compare('id_srequest',$this->id_srequest);
		$criteria->compare('create_by',$this->create_by);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('update_date',$this->update_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}