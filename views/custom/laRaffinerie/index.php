<?php 

/* 
une page fillière contient 
de l'actu 
un communauté
peut etre global ou rattaché à un élément 
	si rattaché à un élement tout 
*/

//assets from ph base repo
$cssJS = array(
    
    '/plugins/jquery.dynForm.js',
    
    '/plugins/jQuery-Knob/js/jquery.knob.js',
    '/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js',
    '/plugins/jquery.dynSurvey/jquery.dynSurvey.js',

    '/plugins/jquery-validation/dist/jquery.validate.min.js',
    '/plugins/select2/select2.min.js' , 
    '/plugins/moment/min/moment.min.js' ,
    '/plugins/moment/min/moment-with-locales.min.js',

    // '/plugins/bootbox/bootbox.min.js' , 
    // '/plugins/blockUI/jquery.blockUI.js' , 
    
    '/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js' , 
    '/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css',
    '/plugins/jquery-cookieDirective/jquery.cookiesdirective.js' , 
    '/plugins/ladda-bootstrap/dist/spin.min.js' , 
    '/plugins/ladda-bootstrap/dist/ladda.min.js' , 
    '/plugins/ladda-bootstrap/dist/ladda.min.css',
    '/plugins/ladda-bootstrap/dist/ladda-themeless.min.css',
    '/plugins/animate.css/animate.min.css',
); 

HtmlHelper::registerCssAndScriptsFiles($cssJS, Yii::app()->request->baseUrl);
$cssJS = array(
	'/js/dataHelpers.js',
	'/js/sig/geoloc.js',
	'/js/sig/findAddressGeoPos.js',
	'/js/default/loginRegister.js'
);
HtmlHelper::registerCssAndScriptsFiles($cssJS, Yii::app()->getModule( Yii::app()->params["module"]["parent"] )->getAssetsUrl() );
$cssJS = array(
'/assets/css/default/dynForm.css',
'/assets/js/comments.js',
);
HtmlHelper::registerCssAndScriptsFiles($cssJS, Yii::app()->theme->baseUrl);

$layoutPath = 'webroot.themes.'.Yii::app()->theme->name.'.views.layouts.';
$me = isset(Yii::app()->session['userId']) ? Person::getById(Yii::app()->session['userId']) : null;
$this->renderPartial( $layoutPath.'modals.CO2.mainMenu', array("me"=>$me) );
?>

<?php 
	$themeParams = CO2::getThemeParams();

	$imgDefault = $this->module->assetsUrl.'/images/news/profile_default_l.png';

	//récupération du type de l'element
    $typeItem = (@$element["typeSig"] && $element["typeSig"] != "") ? $element["typeSig"] : "";
    if($typeItem == "") $typeItem = @$element["typeSig"] ? $element["type"] : "item";
    if($typeItem == "people") $typeItem = "citoyens";
    
    $allLinks = array();
    if(@$element["links"]){
	    foreach (@$element["links"] as $key => $elementsLink) {
		    foreach ($elementsLink as $id => $el) {
		    	$allLinks[$key][] = Element::getByTypeAndId($el["type"], $id);
		    }
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


<style type="text/css">
	
	.trame{
		margin-top: 50px
	}
</style>
<div class=" trame">
	<style type="text/css">
		#titleCostum{
			position: absolute;
			top: 315px;
			left: 0px;
			background-color: rgba(0,0,0,0.7);
			color:white;
			z-index: 10;
			padding: 10px;
			text-align: center;
		}
		#titleCostum h1{ font-size: 44px; font-weight: bolder; }
		#titleCostum a{ font-size: 18px; font-weight: bolder; margin-right:30px;}
	</style>
<?php /* ?>
	<div id="titleCostum">
		<h1>La Raffinerie : La friche éco-culturelle de Savanna</h1>
		<a href="javascript:;" class="text-white"><i class="fa fa-rss"></i> Follow</a> <a href="javascript:;" class="text-white"><i class="fa fa-link"></i> Become Mmber</a> <a href="javascript:;" class="text-white"><i class="fa fa-paper-plane-o"></i> Invite Someone</a>
	</div>
*/ ?>
	<div class="row">

	<div class="col-xs-12 text-center margin-bottom-50">
		<div id="docCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Round button indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#docCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#docCarousel" data-slide-to="1" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="2" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="3" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="4" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="5" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="6" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="7" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="8" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="9" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="10" class=""></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <style type="text/css">
		  	div.item img{width: 100%}
		  	div.item img.ban{width: 100%}
		  </style>
		  <div class="carousel-inner" role="listbox">
		    <div class="item active"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban01-0.jpg'> </div>
		    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban02-0.jpg'> </div>
		    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban03-0.jpg'> </div>
		    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban04-0.jpg'> </div>
		    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban05-0.jpg'> </div>
		    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban06-0.jpg'> </div>
		    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban07-0.jpg'> </div>
		    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban08-0.jpg'> </div>
		    
		    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban10-0.jpg'> </div>
		    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban11-0.jpg'> </div>
		  </div>
			
		</div>
		
	</div>

	<div class="col-xs-12 bgDark">
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">Header la raffinerie</h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/img01.jpg'> </div>
		</div>
	</div>

	<div class="col-xs-12 no-padding" style="background-color:pink;d max-width:100%; float:left;" id="teamSection">
	     <center>
	       <i class="fa fa-caret-down" style="color:#f6f6f6"></i><br>
	    
	      
	      <h1 class="homestead" style="color:#fff">
	      <i class="fa fa-lightbulb-o text-white"></i> PROJET
	      </h1>

	<!-- GALLERY Section -->
	  <?php
	        
	          if(@$projects && sizeOf(@$projects)>0)
	        $this->renderPartial('section', 
	                    array(  "element" => $element,
	                          "items" => $projects,
	                          "sectionKey" => "projects",
	                          "sectionTitle" => "",
	                          "sectionShadow" => true,
	                          "msgNoItem" => "Aucun contact à afficher",
	                          "edit" => @$edit,
	                          "imgShape" => "square",
	                          "useDesc" => false,
	                          "useBorderElement"=>$useBorderElement,
	                          "countStrongLinks"=>@$countStrongLinks,
	                          "styleParams" => array( "bgColor"=>"#FFF",
	                                    "textBright"=>"dark",
	                                    "fontScale"=>3),
	                      ));
	    ?>
	  </center>
	</div>

	<div class="col-xs-12 margin-top-20">
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/evan-dennis-75563-unsplash.jpg'> </div>
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">Espaces de la Raffinerie</h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
	</div>
	
	<div class="col-xs-12">
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">Agenda</h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/edwin-andrade-153753-unsplash.jpg'> </div>
		</div>
	</div>

	<div class="col-xs-12">
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/glen-noble-18012-unsplash.jpg'> </div>
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">Sondage </h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
	</div>


	
	<div class="row col-xs-12 margin-top-20" style="background-color: #D81468; ">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban01-0.jpg'>
		<div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>





	<div class="row col-xs-12" style="background-color: #E6B723">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban02-0.jpg'>
		
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>









	<div class="row col-xs-12" style="background-color: #DA6B0F">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban03-0.jpg'>
		
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>










	<div class="row col-xs-12" style="background-color: #017960">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban04-0.jpg'>
		
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>







	<div class="row col-xs-12" style="background-color: #829D28">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban05-0.jpg'>
		
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>






	<div class="row col-xs-12" style="background-color: #3C8D9E">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban06-0.jpg'>
		
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>






	<div class="row col-xs-12" style="background-color: #014B78">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban07-0.jpg'>
		
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>






	<div class="row col-xs-12" style="background-color: #642872">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban08-0.jpg'>
		
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>





	<div class="row col-xs-12" style="background-color: #CB060D">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban10-0.jpg'>
		
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>




<div class="row col-xs-12" style="background-color: #8C574F">
		<img style="width: 100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/<?php echo $_GET["slug"] ?>/ban11-0.jpg'>
		
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
	              <br><span  class="homestead" style="font-size: 2.2em">34</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-calendar"></i> EVENTS
	              <br><span  class="homestead" style="font-size: 2.2em">25</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
	              <br><span  class="homestead" style="font-size: 2.2em">5</span>
	          </h4> 
	    </div>
	    <div class="card col-xs-12 col-md-3">
	          <h4 class="bold text-white text-center padding-5">
	              <i class="margin-5 fa fa-user"></i> PEOPLE
	              <br><span  class="homestead" style="font-size: 2.2em">7</span>
	          </h4> 
	    </div>
	</div>

	<div class="col-md-12 contact-map padding-bottom-50" style="color:#293A46; float:left; width:100%;" id="contactSection">
    <center>
      <i class="fa fa-caret-down" style="color:#E33551"></i>
      <h1 class="homestead">
      <?php echo Yii::t("home","CONTACT") ?>
      </h1>
      06 92 59 69 27<br>contact@l'art à fine rit.fr

      <br/><a href="https://github.com/pixelhumain/communecter" target="_blank"><?php echo Yii::t("home","connected by <span style='color:#E33551;'>@communecter</span>") ?></a>
    <center>
  </div>




	

</div>

