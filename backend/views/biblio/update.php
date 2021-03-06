<?php
$this->breadcrumbs=array(
	'Biblios'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

require_once('_sidemenu.php');
?>
<h6 class="form-title">Update Biblio <?php echo $model->id; ?></h6>

<?php
$this->widget('zii.widgets.jui.CJuiTabs', array(
        'tabs' => array(
               'Biblio' =>array('id'=>'Summary','content'=>$this->renderPartial('_form',array('model'=>$model),true)),
               'Author' => array('id'=>'item','content'=>$this->renderPartial('_author',array('model'=>$model),true)),
               // panel 3 contains the content rendered by a partial view
			   'Topic' => array('id'=>'topic','content'=>$this->renderPartial('_topic',array('model'=>$model),true)),
               'Notes' =>array('id'=>'Notes','content'=>$this->renderPartial('_note',array('model'=>$model),true)),
         ),
		  
         // additional javascript options for the tabs plugin
        'options' => array(
  //Click the selected tab to toggle its content closed/open.
   //To enable this functionality, set the collapsible option to true
  'collapsible' => false,
 
   //Open CJuitabs on mouse over
  'event'=>'click',   
         ),
));
?>



<?php //echo $this->renderPartial('_form',array('model'=>$model)); ?>