<?php
class PageAction extends CAction
{
    public function run($slug) 
	{
		CO2Stat::incNbLoad("co2-onepage");
    
    	$this->getController()->layout = "//layouts/empty";

    	$el = Slug::getElementBySlug($slug);
    	
    	$this->getController()->pageTitle = @$el["el"]["name"]." ".@$el["el"]["shortDescription"];
		$this->getController()->keywords = $slug." ".@$el["el"]["name"]." ".implode(" ", @$el["el"]["tags"]);

    	
	    $this->getController()->render("custom",array(
	    	"element"=>$el,
	    	"costum" => PHDB::findOne( "costum",array("slug"=>$slug))));
	    
  	}
}