<?php
$this->breadcrumbs=array(
	'Marc Uploads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MarcUpload','url'=>array('index')),
	array('label'=>'Create MarcUpload','url'=>array('create')),
	array('label'=>'Update MarcUpload','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MarcUpload','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MarcUpload','url'=>array('admin')),
);
?>

<h1>View MarcUpload #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'upload_date',
		'filename',
		'user_id',
	),
)); ?>
