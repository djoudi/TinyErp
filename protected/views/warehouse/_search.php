<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_warehouse'); ?>
		<?php echo $form->textField($model,'id_warehouse'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_whse'); ?>
		<?php echo $form->textField($model,'cd_whse',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_whse'); ?>
		<?php echo $form->textField($model,'nm_whse',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->