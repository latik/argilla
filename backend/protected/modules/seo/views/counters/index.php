<?php
/* @var BCountersController $this */
/* @var BCounters $model */

Yii::app()->breadcrumbs->show();

$this->widget('BGridView', array(
  'filter' => $model,
  'dataProvider' => $model->search(),
  'columns' => array(
    array('name' => 'id', 'htmlOptions' => array('class' => 'center span1'), 'filter' => false),
    array('name' => 'name', 'htmlOptions' => array()),
    array('class' => 'JToggleColumn', 'name' => 'main'),
    array('class' => 'JToggleColumn', 'name' => 'visible'),
    array('class' => 'BButtonColumn'),
  ),
));