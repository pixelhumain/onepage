<?php
class IndexAction extends CAction
{
    public function run($slug, $noEdit=false) 
	{
		CO2Stat::incNbLoad("co2-onepage");
    
    	//if(Yii::app()->request->isAjaxRequest){
	    //    echo $this->renderPartial("index");
	    //}else{
	      	$element = Slug::getBySlug($slug); 
	      	$element = Element::getByTypeAndId($element["type"], $element["id"]);
	      	
	      	/* metadata */
	      	$shortDesc =  @$element["shortDescription"] ? $element["shortDescription"] : "";
	      	if($shortDesc=="")
	      		$shortDesc = @$element["description"] ? $element["description"] : "";

	      	$this->getController()->module->description = $shortDesc;
	      	$this->getController()->module->pageTitle = @$element["name"];
	      	/* metadata */

	      	$params = array("element"=>$element,
						    "type"=>$element["type"]);

	      	$params = Element::getInfoDetail($params, $element, $element["type"], $element["_id"]);

	      	if($noEdit==true)
	      		$params["edit"] = false;

	      	$params["noEdit"] = $noEdit;

	        $this->getController()->layout = "//layouts/empty";
	        $this->getController()->render("index", $params);
	    //}
  	}


}