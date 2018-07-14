<?php
/* @var $this TeamController */
/* @var $model Team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Team', 'url'=>array('index')),
	array('label'=>'Create Team', 'url'=>array('create')),
	array('label'=>'Update Team', 'url'=>array('update', 'id'=>$model->team_id)),
	array('label'=>'Delete Team', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->team_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Team', 'url'=>array('admin')),
);
?>

<h1>View Team #<?php echo $model->team_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'team_id',
		'name',
		'logo',
		'club_state',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
