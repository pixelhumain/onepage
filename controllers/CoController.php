<?php
/**
 * CoController.php
 *
 * Cocontroller always works with the PH base 
 *
 * @author: Alpha Tango <tango@communecter.org>
 * Date: 14/03/2014
 */
class CoController extends CommunecterController {


    protected function beforeAction($action) {
        //parent::initPage();
		return parent::beforeAction($action);
  	}

  	public function actions()
	{
	    return array(
	        //'test'  => 'onepage.controllers.actions.TestAction',
	    );
	}

	public function actionIndex($slug, $noEdit=false) 
	{
		CO2Stat::incNbLoad("co2-onepage");
    
    	if(Yii::app()->request->isAjaxRequest){
	        echo $this->renderPartial("index");
	    }else{
	      	$element = Slug::getBySlug($slug); 
	      	$element = Element::getByTypeAndId($element["type"], $element["id"]);
	      	
	      	/* metadata */
	      	$shortDesc =  @$element["shortDescription"] ? $element["shortDescription"] : "";
	      	if($shortDesc=="")
	      		$shortDesc = @$element["description"] ? $element["description"] : "";

	      	$this->module->description = $shortDesc;
	      	$this->module->pageTitle = @$element["name"];
	      	/* metadata */

	      	$params = array("element"=>$element,
						    "type"=>$element["type"]);

	      	$params = Element::getInfoDetail($params, $element, $element["type"], $element["_id"]);

	      	if($noEdit==true)
	      		$params["edit"] = false;

	        $this->layout = "//layouts/empty";
	        $this->render("index", $params);
	    }
  	}
}
