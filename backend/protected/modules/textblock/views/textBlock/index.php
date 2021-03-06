<?php
/* @var BTextBlockController $this */
/* @var BTextBlock $model */

Yii::app()->breadcrumbs->show();

$this->widget('BGridView', array(
  'filter' => $model,
  'dataProvider' => $model->search(),
  'columns' => array(
    array('name' => 'id', 'htmlOptions' => array('class' => 'center span1'), 'filter' => false),
    array('name' => 'position', 'htmlOptions' => array('class' => 'span1'), 'class' => 'OnFlyEditField', 'header' => 'Позиция', 'filter' => false),
    array('name' => 'location', 'htmlOptions' => array('class' => 'span3')),

    array('name' => 'name', 'htmlOptions' => array('class' => 'span3'), 'header' => 'Описание'),
    array('name' => 'content', 'filter' => false, 'type' => 'html'),

    array('name' => 'auto_created', 'htmlOptions' => array('class' => 'span1'), 'value' => '$data->auto_created ? "Автоматически" : "Пользователем"'),
    array('class' => 'JToggleColumn', 'name' => 'visible'),
    array('class' => 'BButtonColumn'),
  ),
));