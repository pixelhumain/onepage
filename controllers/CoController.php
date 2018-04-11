<?php
/**
 * CoController.php
 *
 * Cocontroller always works with the PH base 
 *
 * @author: Tibor Katelbach <tibor@pixelhumain.com>
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
	        //'test'  => 'classifieds.controllers.actions.TestAction',
	        //'market'  => 'classifieds.controllers.actions.MarketAction'
	    );
	}

	public function actionIndex($slug) 
	{
		CO2Stat::incNbLoad("co2-annonces");
    
		//$this->module->pageTitle = "aloha";

    	if(Yii::app()->request->isAjaxRequest)
	        echo $this->renderPartial("index");
	      else
	      {
	      	$element = Slug::getBySlug($slug); 
	      	$element = Element::getByTypeAndId($element["type"], $element["id"]);
	      	
	      	$this->module->pageTitle = @$element["name"];

	      	$shortDesc =  @$element["shortDescription"] ? $element["shortDescription"] : "";
	      	if($shortDesc=="")
	      		$shortDesc = @$element["description"] ? $element["description"] : "";

	      	$this->module->description = $shortDesc;

	        $this->layout = "//layouts/empty";
	        $this->render("index", array("element"=>$element,
	        							   "type"=>Person::COLLECTION,
	        							   "edit"=>true,
	        							   "openEdition"=>true));
	      }
    	//$this->redirect(Yii::app()->createUrl( "/".Yii::app()->params["module"]["parent"] ));	
  	}
}
