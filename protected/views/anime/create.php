<?php
$this->breadcrumbs=array(
	'Animes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Anime','url'=>array('index')),
	array('label'=>'Manage Anime','url'=>array('admin')),
);
?>

<h1>Create Anime</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>