<?php
$this->breadcrumbs=array(
	'Animes'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anime','url'=>array('index')),
	array('label'=>'Create Anime','url'=>array('create')),
	array('label'=>'View Anime','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Anime','url'=>array('admin')),
);
?>

<h1>Update Anime <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>