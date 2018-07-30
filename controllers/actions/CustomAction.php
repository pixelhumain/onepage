<?php
class CustomAction extends CAction
{
    public function run($slug, $noEdit=false) 
	{
		CO2Stat::incNbLoad("co2-onepage");
    
    	$this->getController()->layout = "//layouts/empty";
    	$el = Slug::getElementBySlug($slug);
	    $this->getController()->render("custom",array("element"=>$el));
	    
  	}
}