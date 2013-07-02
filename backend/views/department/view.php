<?php
$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Department','url'=>array('index')),
	array('label'=>'Create Department','url'=>array('create')),
	array('label'=>'Update Department','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Department','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Department','url'=>array('admin')),
);
?>

<h1>View Department #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'is_active',
		'date_created',
		'created_by',
		'library_id',
	),
)); ?>
