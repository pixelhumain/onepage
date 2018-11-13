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


		CO2Stat::incNbLoad("co2-page");
        
        $type = $el["type"];
        $id = $el["id"];
        $element = Element::getByTypeAndId($type, $id);
        
        //element deleted 
        if( (!empty($element["status"]) && $element["status"] == "deleted") ||  
            (!empty($element["tobeactivated"]) && $element["tobeactivated"] == true) )
             $this->redirect( Yii::app()->createUrl($controller->module->id) );

        //visibility authoraizations
        if(!Preference::isPublicElement(@$element["preferences"]) &&
             (!@Yii::app()->session["userId"] || !Authorisation::canSeePrivateElement(@$element["links"], $type, $id, $element["creator"], @$element["parentType"], @$element["parentId"])))
            $this->redirect( Yii::app()->createUrl($controller->module->id) );

        if(@$element["parentId"] && @$element["parentType"] && 
            $element["parentId"] != "dontKnow" && $element["parentType"] != "dontKnow")
            $element['parent'] = Element::getSimpleByTypeAndId( $element["parentType"], $element["parentId"]);
        
        if(@$element["organizerId"] && @$element["organizerType"] && 
            $element["organizerId"] != "dontKnow" && $element["organizerType"] != "dontKnow")
            $element['organizer'] = Element::getByTypeAndId( $element["organizerType"], $element["organizerId"]);
        
        $params = array("id" => @$id,
                        "type" => @$type,
                        "view" => @$view,
                        "dir" => @$dir,
                        "key" => @$key,
                        "folder" => @$folder,
                        "subdomain" => "page",
                        "mainTitle" => "Page perso",
                        "placeholderMainSearch" => "",
                        "element" => $element);

        //var_dump($element);exit;
        $params = Element::getInfoDetail($params, $element, $type, $id);
        
        //bloque l'édition de la page (même si on est l'admin)
        //visualisation utilisateur
        if(@$mode=="noedit"){ $params["edit"] = false; }

        //var_dump($params);exit;

        if(@$_POST["preview"] == true){
            //echo "oui";exit;
            $params["preview"]=$_POST["preview"]; 
            if($type == "classifieds") $this->renderPartial('eco.views.co.preview', $params );
           // else if($type == "ressources") $this->renderPartial('ressources.views.co.preview', $params ); 
            else if($type == "poi") $this->renderPartial('../poi/preview', $params ); 
            else $this->renderPartial("co2.views.element.onepage", $params);
        }else
        	$this->getController()->render("co2.views.app.page",$params);
  	}
}