<?php
/*Assume that you have a folder named assets inside the protected folder used to store the images */

/* @var $this TeamController */
/* @var $model Team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	'Manage',
);

?>

<h1>Teams</h1>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'user-grid',
	'type'=>'striped bordered condensed hover',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('header'=>'Sr. No.',
            'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',

        ),
		array(
       'name'=>'logo', 
        'type'=>'image',
        'value'=>'Yii::app()->request->baseUrl."/themes/images/".$data->logo','htmlOptions'=>array('width'=>'5 0px','height'=>'50px'),
        'filter'=>false,
        ),
		'name',
		'club_state',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>

