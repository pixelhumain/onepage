<?php
class SlideAction extends CAction
{
    public function run($slug) 
	{
		CO2Stat::incNbLoad("co2-onepage");
    
    	$this->getController()->layout = "//layouts/reveal";

    	$el = Slug::getElementBySlug($slug);
    	
    	$this->getController()->pageTitle = @$el["el"]["name"]." ".@$el["el"]["shortDescription"];
		$this->getController()->keywords = $slug." ".@$el["name"]." ".@$form["tags"];
		
	    $this->getController()->render("custom",array(
	    	"element"=>$el,
	    	"costum" => PHDB::findOne( "costum",array("slug"=>$slug))));
	    
  	}
}