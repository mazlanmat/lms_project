<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'marc-upload-form',
	'enableAjaxValidation'=>false,
	'type'=> 'horizontal',
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'upload_date',array('class'=>'span5')); ?>

	<?php echo $form->fileFieldRow($model,'filename',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
