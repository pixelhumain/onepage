<?php 


/*

- costum dd'edith
[ ] costum tiers Lieux == costum template type TL
  [ ] costum.raffinerie
  [ ] costum.la coco
  [ ] costum.ancelia
  [ ] costum.lamyne
[ ] costum.encommuns
[ ] costum.territoire
  utilisant les zones
  ex : leport  https://www.communecter.org/custom?el=city.97407
[ ] costum.filière 
    ex : emploi
    
*/
if( @$page ){
    $this->renderPartial( $page, $params);
}
else if( @Yii::app()->session['custom']["welcomeTpl"] ){
    $this->renderPartial( Yii::app()->session['custom']["welcomeTpl"], 
    						array("params"=>$element["el"],
    							  "type"=>$element["type"],
    							  "id"=>$element["id"] ) );
} 
else if( file_exists(YiiBase::getPathOfAlias('onepage')."/views/custom/".@$_GET["slug"]."/index.php") ) { 
    if(@$element)
	   $this->renderPartial( "../custom/".$element["el"]["slug"]."/index", 
    						array("element"=>$element["el"],
                  "custom"=>@$custom,
    							  "type"=>$element["type"],
    							  "id"=>$element["id"] ) );
    else 
        echo "<h1>Cet élément n'existe pas</h1>";
} 
else {
    if(@$element)
	   $this->renderPartial( "../custom/index", 
    						array("element"=>$element["el"],
    							  "type"=>$element["type"],
    							  "id"=>$element["id"] ) );
    else 
        echo "<h1>Cet élément n'existe pas, et n'a pas de template</h1>";
}