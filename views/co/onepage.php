<?php 
	$themeParams = CO2::getThemeParams();

	$imgDefault = $this->module->assetsUrl.'/images/news/profile_default_l.png';

	//récupération du type de l'element
    $typeItem = (@$element["typeSig"] && $element["typeSig"] != "") ? $element["typeSig"] : "";
    if($typeItem == "") $typeItem = @$element["typeSig"] ? $element["type"] : "item";
    if($typeItem == "people") $typeItem = "citoyens";
    
    $allLinks = array();
    foreach ($element["links"] as $key => $elementsLink) {
	    foreach ($elementsLink as $id => $el) {
	    	$allLinks[$key][] = Element::getByTypeAndId($el["type"], $id);
	    }
	}	
	
	$events = @$allLinks["events"];
    $members = @$allLinks["members"];
    $memberOf = @$allLinks["memberOf"];
    $followers = @$allLinks["followers"];

    $projects = @$allLinks["projects"];
 	$tags = @$element["tags"];
 	
 	$hash = @$element["slug"] ? "#".$element["slug"] :
								"#page.type.".$type.".id.".$element["_id"];
   
	$hashOnepage = "#page.type.".$type.".id.".$element["_id"].".view.".$themeParams["onepageKey"][0];

    $typeItemHead = $typeItem;
    if($typeItem == "organizations" && @$element["type"]) $typeItemHead = $element["type"];

    //icon et couleur de l'element
    $icon = Element::getFaIcon($typeItemHead) ? Element::getFaIcon($typeItemHead) : "";
    $iconColor = Element::getColorIcon($typeItemHead) ? Element::getColorIcon($typeItemHead) : "";

    $useBorderElement = false;
?>

<style></style>

<div>

	<!-- MENU TOP -->
    <?php $this->renderPartial('menuTop', 
    							array( "layoutPath"=>$layoutPath , 
                                        "subdomain"=>"",
                                        "subdomainName"=>"",
                                        "mainTitle"=>"",
                                        "placeholderMainSearch"=>"",
                                        "type"=>@$type,
                                        "me" => $me,
                                        "edit" => $edit,
                                        "element" => $element,
    								   "hashOnepage" => @$hashOnepage) ); 
	?>

	<!-- BANNER Section -->
    <?php $this->renderPartial('banner', 
    							array( "element" => $element )); 
	?>

	<!-- HEADER Section -->
    <?php $this->renderPartial('header', 
    							array( "element" => $element,
    								   "edit" => @$edit,
    								   "linksBtn" => @$linksBtn,
    								   "hash" => @$hash,
    								   "type" => @$type,
    								   "openEdition" => @$openEdition)); 
	?>

	<?php if($edit==true){ ?>
		<div class="col-xs-12 text-center">
			<button class="btn btn-link bg-white text-dark tooltips btn-central-tool btn-update-descriptions shadow2"
					data-original-title="Modifier les descriptions" data-toogle="tooltips">
				<i class="fa fa-pencil"></i> Modifier la description
			</button>
		</div>	
	    <span class="contentInformation hidden">
	    	<span  id="shortDescriptionAboutEdit"><?php echo (!empty(@$element["shortDescription"])) ? @$element["shortDescription"] : ""; ?></span>
	  	</span>
    <?php } ?>


    <!-- DESCRIPTION Section -->
    <?php   
    		$desc = array( array("shortDescription"=>@$element["description"],
    							 "useMarkdown" => true), );

    		if(@$desc && sizeOf(@$desc)>0)
    		$this->renderPartial('section', 
    								array(  "element" => $element,
    								   		"items" => $desc,
											"sectionKey" => "description",
											"sectionTitle" => "PRÉSENTATION",
											"sectionShadow" => true,
											"msgNoItem" => "Aucune description",
											"imgShape" => "square",
											"edit" => $edit,
											"useImg" => false,
											"fullWidth" => true, //only for 1 element
											"useBorderElement"=>$useBorderElement,

											"styleParams" => array(	"bgColor"=>"#FFF",
															  		"textBright"=>"dark",
															  		"fontScale"=>3),
											));
    ?>


	<!-- GALLERY Section -->
	<?php $this->renderPartial('sectionBefore', 
	                                array(  "element" => @$element,
	                                        "edit" => @$edit,
	                                        "sectionKey" => "gallery",
	                                        "useBorderElement" => @$useBorderElement));
	?>

	<?php $this->renderPartial('createFreeSection', 
	                                array(  "sectionShadow" => @$sectionShadow,
	                                        "element" => $element,
	                                        "edit" => @$edit,
	                                        "sectionKey" => "gallery"));
	?>

	<?php if(@$element["onepageEdition"]["#gallery"]["hidden"] != "true" || @$edit == true){ ?>
	<section id="gallery" class="bg-white row shadow">
		<?php if(@$edit==true){ ?>
			<button class="btn btn-default btn-sm pull-right margin-right-15 hidden-xs btn-edit-section" 
				    data-id="#gallery">
		        	<i class="fa fa-cog"></i>
		    </button>
		    <?php $this->renderPartial('btnShowHide', 
	                                    array(  "element" => $element,
	                                            "sectionKey" => "gallery"));
	        ?>
	    <?php } ?>

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">
                    <span class="sec-title">Galleries photos</span><br>
                    <i class="fa fa-angle-down"></i>
                </h2>
            </div>
        </div>

		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<ul class="timeline inline-block" id="gallery-page">
		</ul>

	</section>
	<?php } ?>

    <!-- EVENTS Section -->
    <?php   if(@$events && sizeOf(@$events)>0){
    			foreach ($events as $key => $value)
    				if(Event::isPast($value)) unset($events[$key]);
    			
    			if(sizeOf(@$events)>0)
    			$this->renderPartial('section', 
	    								array(  "element" => $element,
	    								   		"items" => $events,
												"sectionKey" => "events",
												"sectionTitle" => "ÉVÉNEMENTS À VENIR",
												"sectionShadow" => true,
												"msgNoItem" => "Aucun événement à afficher",
												"imgShape" => "square",
												"edit" => $edit,
												"useDesc" => true,
												"useBorderElement"=>$useBorderElement,
												"styleParams" => array(	"bgColor"=>"#f1f2f6",
																  		"textBright"=>"dark",
																  		"fontScale"=>3),
												));
    		} 
    ?>

    <!-- PROJETS Section -->
    <?php   if(@$projects && sizeOf(@$projects)>0){

	    		$sectionTitle = "MES PROJETS";
	    	    if(@$typeItem != "citoyens") $sectionTitle = "NOS PROJETS";
	    	    
	    		$this->renderPartial('section', 
	    								array(  "element" => $element,
    								   			"items" => $projects,
												"sectionKey" => "projects",
												"sectionTitle" => "NOS PROJETS",
												"sectionShadow" => true,
												"msgNoItem" => "Aucun projet à afficher",
												"edit" => $edit,
												"imgShape" => "square",
												"useDesc" => false,
												"useBorderElement"=>$useBorderElement,
												"styleParams" => array(	"bgColor"=>"#FFF",
																  		"textBright"=>"dark",
																  		"fontScale"=>3),
												));
    		}
	?>

	
	<!-- COMMUNAUTE Section -->
    <?php
    		$sectionTitle = "COMMUNAUTÉ";
    	    if(@$typeItem == "organizations") $sectionTitle = "NOS MEMBRES";
    	    if(@$typeItem == "projects") $sectionTitle = "ILS CONTRIBUENT AU PROJET";
    	    if(@$typeItem == "events") $sectionTitle = "LES PARTICIPANTS";
    	    
    	    if(@$members && sizeOf(@$members)>0)
    		$this->renderPartial('section', 
    								array(  "element" => $element,
    								   		"items" => $members,
											"sectionKey" => "participant",
											"sectionTitle" => $sectionTitle,
											"sectionShadow" => true,
											"msgNoItem" => "Aucun contact à afficher",
											"edit" => $edit,
											"imgShape" => "square",
											"useDesc" => false,
											"useBorderElement"=>$useBorderElement,
											"countStrongLinks"=>@$countStrongLinks,
											"styleParams" => array(	"bgColor"=>"#FFF",
															  		"textBright"=>"dark",
															  		"fontScale"=>3),
											));
    ?>

   
	<!-- COMMUNAUTE Section -->
    <?php
    		$sectionTitle = "COMMUNAUTÉ";
    	    if(@$typeItem == "organizations") $sectionTitle = "NOUS SOMMES MEMBRES";
    	    if(@$typeItem == "projects") $sectionTitle = "NOUS SOMMES MEMBRES";
    	    if(@$typeItem == "events") $sectionTitle = "NOUS SOMMES MEMBRES";
    	    
    	    if(@$members && sizeOf(@$memberOf)>0)
    		$this->renderPartial('section', 
    								array(  "element" => $element,
    								   		"items" => $memberOf,
											"sectionKey" => "directory",
											"sectionTitle" => $sectionTitle,
											"sectionShadow" => true,
											"msgNoItem" => "Aucun contact à afficher",
											"edit" => $edit,
											"imgShape" => "square",
											"useDesc" => false,
											"useBorderElement"=>$useBorderElement,
											"countStrongLinks"=>@$countStrongLinks,
											"styleParams" => array(	"bgColor"=>"#FFF",
															  		"textBright"=>"dark",
															  		"fontScale"=>3),
											));
    ?>

    <!-- RESSOURCES Section -->
    <?php	$sectionTitle = "RESSOURCES";
    	    if(@$typeItem == "citoyens") $sectionTitle = "MES RESSOURCES";
    	    else 						 $sectionTitle = "NOS RESSOURCES";
    	    
    	    $ressources = Element::getByIdAndTypeOfParent( 
									Ressource::COLLECTION, (string)$element["_id"], 
									$typeItem, array("updated"=>-1));
    	    

    	    if(@$ressources && sizeOf(@$ressources)>0){
    	    	foreach ($ressources as $key => $value) {
	    	    	$ressources[$key]["type"] = Ressource::COLLECTION;
	    	    }

	    	    $this->renderPartial('section', 
	    								array(  "element" => $element,
    								   			"items" => @$ressources,
												"sectionKey" => "ressources",
												"sectionTitle" => $sectionTitle,
												"sectionShadow" => true,
												"msgNoItem" => "Aucune ressource à afficher",
												"edit" => $edit,
												"imgShape" => "square",
												"useDesc" => false,
												"useBorderElement"=>$useBorderElement,
												"styleParams" => array(	"bgColor"=>"#FFF",
																  		"textBright"=>"dark",
																  		"fontScale"=>3),
												));
    	    }
    		
    ?>
    
    <!-- CLASSIFIED Section -->
    <?php 	$classified = Element::getByIdAndTypeOfParent( 
									Classified::COLLECTION, (string)$element["_id"], 
									$typeItem, array("updated"=>-1));
    	    

    	    if(@$classified && sizeOf(@$classified)>0){
    	    	foreach ($classified as $key => $value) {
	    	    	$classified[$key]["type"] = Classified::COLLECTION;
	    	    }

	    	    $this->renderPartial('section', 
	    								array(  "element" => $element,
    								   			"items" => @$classified,
												"sectionKey" => "classified",
												"sectionTitle" => "Petites annonces",
												"sectionShadow" => true,
												"msgNoItem" => "Aucune annonce à afficher",
												"edit" => $edit,
												"imgShape" => "square",
												"useDesc" => false,
												"useBorderElement"=>$useBorderElement,
												"styleParams" => array(	"bgColor"=>"#FFF",
																  		"textBright"=>"dark",
																  		"fontScale"=>3),
												));
    	    }
    		
    ?>
    
    <!-- POI Section -->
    <?php 	$poi = Element::getByIdAndTypeOfParent( 
									Poi::COLLECTION, (string)$element["_id"], 
									$typeItem, array("updated"=>-1));
    	    

    	    if(@$poi && sizeOf(@$poi)>0){
    	    	foreach ($poi as $key => $value) {
	    	    	$poi[$key]["type"] = Poi::COLLECTION;
	    	    }

	    	    $this->renderPartial('section', 
	    								array(  "element" => $element,
    								   			"items" => @$poi,
												"sectionKey" => "poi",
												"sectionTitle" => "Points d'intérets",
												"sectionShadow" => true,
												"msgNoItem" => "Aucun point d'intéret à afficher",
												"edit" => $edit,
												"imgShape" => "square",
												"useDesc" => false,
												"useBorderElement"=>$useBorderElement,
												"styleParams" => array(	"bgColor"=>"#FFF",
																  		"textBright"=>"dark",
																  		"fontScale"=>3),
												));
    	    }
    		
    ?>

    
    <!-- FOLLOWERS Section -->
    <?php
    		$sectionTitle = "FOLLOWERS";
    	    if(@$typeItem == "citoyens") $sectionTitle = "MES ABONNÉS";
    	    else 						 $sectionTitle = "NOS ABONNÉS";
    	    
    	    if(@$followers && sizeOf(@$followers)>0)
    		$this->renderPartial('section', 
    								array(  "element" => $element,
    								   		"items" => $followers,
											"sectionKey" => "followers",
											"sectionTitle" => $sectionTitle,
											"sectionShadow" => true,
											"msgNoItem" => "Aucun contact à afficher",
											"edit" => $edit,
											"imgShape" => "square",
											"useDesc" => false,
											"useBorderElement"=>$useBorderElement,
											"countStrongLinks"=>@$countStrongLinks,
											"styleParams" => array(	"bgColor"=>"#FFF",
															  		"textBright"=>"dark",
															  		"fontScale"=>3),
											));
    ?>


    <!-- NOS VALEURS Section -->
	<?php if (false && ($type==Project::COLLECTION) && !empty($element["properties"]["chart"])){ ?>
	<section id="projects-values" class="portfolio shadow">
		<div class="container">
			<div class="row">
	            <div class="col-lg-12 text-center">
	                <h2>Les valeurs du projet<br><i class="fa fa-angle-down"></i></h2>
	            </div>
	        </div>
            <div class="row">
        		<div class="no-padding col-md-8 col-md-offset-2">
					<?php if(empty($element["properties"]["chart"])) $element["properties"]["chart"] = array();
						  $this->renderPartial('../project/pod/projectChart',
												array(	"itemId" => (string)$element["_id"], 
														"itemName" => $element["name"], 
														"properties" => $element["properties"]["chart"],
														"admin" =>$edit,
														"isDetailView" => 1,
														"openEdition" => @$openEdition,
														"chartAlone" => true));
					?>						  
				</div>
			</div>
		</div>
	</section>
	<?php } ?>


	<!-- TIMELINE Section -->
	<?php $this->renderPartial('sectionBefore', 
	                                    array(  "element" => @$element,
	                                            "edit" => @$edit,
	                                            "sectionKey" => "timeline",
	                                            "useBorderElement" => @$useBorderElement));
	?>

	<?php $this->renderPartial('createFreeSection', 
	                                    array(  "sectionShadow" => @$sectionShadow,
	                                            "element" => $element,
                                            	"edit" => @$edit,
	                                            "sectionKey" => "timeline"));
	?>

	<?php if(@$element["onepageEdition"]["#timeline"]["hidden"] != "true" || @$edit == true){ ?>
	<section id="timeline" class="bg-white row shadow padding-15">
		<?php if(@$edit==true){ ?>
			<button class="btn btn-default btn-sm pull-right margin-right-15 hidden-xs btn-edit-section" 
				    data-id="#timeline">
		        	<i class="fa fa-cog"></i>
		    </button>
	        <?php $this->renderPartial('btnShowHide', 
	                                    array(  "element" => $element,
	                                            "sectionKey" => "timeline"));
	        ?>
	    <?php } ?>

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">
                    <span class="sec-title">Actualité récente</span><br>
                    <i class="fa fa-angle-down"></i>
                </h2>
            </div>
        </div>

		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<ul class="timeline inline-block" id="timeline-page">
			</ul>
		</div>
	</section>
	<?php } ?>


	<?php $this->renderPartial('footer', 
    							array( "element" => $element,
    								   "edit" => @$edit)); 
	?>


	<?php $this->renderPartial('modalSelectImage', 
	                          array( "element" => @$element ));
	?>


	<?php $this->renderPartial('modalSelectGallery', 
	                          array( "element" => @$element ));
	?>

	<?php //render of modal for coop spaces 
		$paramsCoop = array(  "element" => @$element, 
                            "type" => @$type, 
                            "edit" => @$edit,
                            "thumbAuthor"=>@$thumbAuthor,
                            "openEdition" => $openEdition,
                            "iconColor" => $iconColor
                        );
    	//$this->renderPartial('../../../co2/views/cooperation/pod/modals', $paramsCoop ); 
    ?>


    <?php 
    	$mapData = array();
    	$mapData = @$members ? array_merge($members, $mapData) : array();
    	$mapData = @$projects ? array_merge($projects, $mapData) : array();
    	$mapData = @$events ? array_merge($events, $mapData) : array();

    	$controler = Element::getControlerByCollection($typeItem) ;
    ?>
</div>


<?php if(@$edit == true)	
		$this->renderPartial('sectionEditTools', 
			array("type"=>Element::getControlerByCollection($typeItem),
				  "id"=>$element["_id"],
				  "element"=>$element)); 
?>

<script type="text/javascript" >
    
var isOnepage = true;
var typeItem = "<?php echo @$typeItem; ?>";
var edit = "<?php echo @$edit; ?>";

var elementName = "<?php echo @$element["name"]; ?>";
var elementId = "<?php echo (string)$element["_id"]; ?>";
var elementType = "<?php echo @$element["type"]; ?>";

var mapData = <?php echo json_encode(@$mapData) ?>;
var params = <?php echo json_encode(@$params) ?>;
var contextDataOnepage = <?php echo json_encode( Element::getElementForJS(@$element, @$type) ); ?>; 
var contextData = "";
var openEdition = "<?php echo (string)@$element["openEdition"]; ?>";
var parentModuleName = "<?php echo Yii::app()->params["module"]["parent"]; ?>";
var currentIdSection = "";

jQuery(document).ready(function() {
	initOnepageInterface();
});

</script>
