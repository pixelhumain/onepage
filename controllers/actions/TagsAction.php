<?php
class TagsAction extends CAction
{
    public function run($l, $slug) 
	{
		CO2Stat::incNbLoad("co2-onepage");
    
    	$this->getController()->layout = "//layouts/empty";

    	$params = array(
    		"costum" => PHDB::findOne( "costum",array("tag"=>$l)),
            "el" => Slug::getElementBySlug( $slug ),
    		"organizations" => Element::getByTagsAndLimit("organizations",null,null,explode(".",$l)) ,
    		"projects" => Element::getByTagsAndLimit("projects",null,null,explode(".",$l)),
    		"events" => Element::getByTagsAndLimit("events",null,null,explode(".",$l)),
    		"persons" => Element::getByTagsAndLimit("persons",null,null,explode(".",$l))
    	);

        $this->getController()->pageTitle = @$params["el"]["el"]["name"];
        $this->getController()->keywords = $l." ".$slug." ".@$el["name"]." ".@$form["tags"];
        
    	$page = (@$tag && @$tag["custom"]["tpl"]) ? $tag["custom"]["tpl"] : "../custom/tags";
    	$this->getController()->render("custom",array(
    		"page" => $page,
    		"params" => $params )
    	);
  	}
}