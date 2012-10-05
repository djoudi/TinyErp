<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-limitation-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <fieldset>
	<div class="row">
		<?php echo $form->labelEx($model,'id_customer'); ?>
		<?php echo $form->textField($model,'id_customer'); ?>
		<?php echo $form->error($model,'id_customer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'multi_invoice'); ?>
		<?php echo $form->textField($model,'multi_invoice'); ?>
		<?php echo $form->error($model,'multi_invoice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit_limit'); ?>
		<?php echo $form->textField($model,'credit_limit'); ?>
		<?php echo $form->error($model,'credit_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blocked'); ?>
		<?php echo $form->checkBox($model,'blocked'); ?>
		<?php echo $form->error($model,'blocked'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
</fieldset>
<?php $this->endWidget(); ?>

</div><!-- form -->