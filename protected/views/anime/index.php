<?php
$this->breadcrumbs=array(
	'Animes',
);

$this->menu=array(
	array('label'=>'Create Anime','url'=>array('create')),
	array('label'=>'Manage Anime','url'=>array('admin')),
);
?>

<h1>Animes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
