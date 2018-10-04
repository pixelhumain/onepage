<?php 
if( @Yii::app()->session['custom']["welcomeTpl"] ){
	
    $this->renderPartial( Yii::app()->session['custom']["welcomeTpl"], 
    						array("element"=>$element["el"],
    							  "type"=>$element["type"],
    							  "id"=>$element["id"] ) );
} else {
	echo "<h1>You must set up your template</h1>" ;
}