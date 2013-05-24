
<div class="form">
<?php /** @var BootActiveForm $form */
 
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
));
?>

<p class="note">Fields with <span class="required">*</span> are required.</p> 
<?php echo CHtml::errorSummary($model); ?>
<?php echo $form->textFieldRow($model, 'title', array('class'=>'span3')); ?>
<?php echo $form->textAreaRow($model, 'content', array('class'=>'span6', 'rows'=>5)); ?>
<div class="control-group">
<label class="control-label required" for="Post_tags">
Tags
<span class="required">*</span>
</label>	
<div class="controls">
		<?php $this->widget('CAutoComplete', array(
			'model'=>$model,
			'attribute'=>'tags',
			'url'=>array('suggestTags'),
			'multiple'=>true,
			'htmlOptions'=>array('size'=>50),
		)); ?>
		<p class="hint">Please separate different tags with commas.</p>
		<?php echo $form->error($model,'tags'); ?>
		</div>
	</div>

<?php echo $form->dropDownListRow($model, 'status', Lookup::items('PostStatus')); ?>	

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'link', 'label'=>'Close', 'url'=>array('post/admin_b'))); ?>
</div>
 
<?php $this->endWidget(); ?>



</div><!-- form -->