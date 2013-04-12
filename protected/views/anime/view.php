<?php
$this->breadcrumbs=array(
	'Animes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Anime','url'=>array('index')),
	array('label'=>'Create Anime','url'=>array('create')),
	array('label'=>'Update Anime','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Anime','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anime','url'=>array('admin')),
);
?>

<h1>View Anime #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'publisher',
		'date',
	),
)); ?>
