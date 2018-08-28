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

<div class="pageContent">

<?php /* ?>
<div id="affix-sub-menu" class="hidden-xs affix">
    <div id="territorial-menu" class="col-md-10 col-sm-10 col-xs-12 margin-bottom-10">
        <?php //if(false){
            $params = CO2::getThemeParams();
            foreach ($params["pages"] as $key => $value) {
                if(@$value["inMenu"]==true && @$value["open"]==true){ ?>
                    <a href="javascript:;" data-hash="<?php echo $key; ?>" 
                    class="<?php echo $key; ?>ModBtn btn btn-link pull-left btn-menu-to-app hidden-top link-submenu-header lbh-menu-app">
                            
                    <i class="fa fa-<?php echo $value["icon"]; ?>"></i>
                    <span class="<?php echo str_replace("#","",$key); ?>ModSpan"><?php echo Yii::t("common", $value["subdomainName"]); ?></span>
                    <span class="<?php echo @$value["notif"]; ?> topbar-badge badge animated bounceIn badge-warning"></span>
                    <?php if(@$value["notif"]){ ?>
                    <?php } ?>
                </a>  
            <?php   }
            } ?>
    </div>
</div>
*/?>

<style type="text/css">
  #customHeader{
    margin-top: 47px;
  }
  #costumBanner{
    max-height: 375px;
  }
  #costumBanner h1{
    position: absolute;
    color: white;
    background-color: rgba(0,0,0,0.4);
    font-size: 29px;
    bottom: 0px;
    padding: 20px;
  }
  #costumBanner h1 span{
    color: #eeeeee;
    font-style: italic;
  }
  #costumBanner img{
    min-width: 100%;
  }
  @media screen and (min-width: 450px) and (max-width: 1024px) {
    .logoDescription{
      width: 60%;
      margin:auto;
    }
  }

  @media (max-width: 1024px){
    #customHeader{
      margin-top: -1px;
    }
  }
  @media (max-width: 768px){

  }
</style>

<?php 
/*
$this->renderPartial( "onepage.views.custom.demorun.banner" );
$this->renderPartial( "onepage.views.custom.demorun.cards" );
*/
 ?>


<!-- /////////////////////////////////////////////////////  -->




<div class="col-xs-12 no-padding" id="customHeader" style="background-color: white">
  <div id="costumBanner" class="col-xs-12 col-sm-12 col-md-9 no-padding">
   <h1>DEMORUN<br/><span class="small">Une nouvelle interface Démo Pratique</span></h1>
  <img class="img-responsive" src='<?php echo @Yii::app()->session['custom']["assetsUrl"].Yii::app()->session['custom']["banner"]; ?>'> 
  </div>
  <div class="col-xs-12 col-sm-12 col-md-3 text-center padding-10" >
    <img class="img-responsive logoDescription" src='<?php echo Yii::app()->session['custom']["logo"]?>'> 
    <!--<h2>Une ville Dynamique</h2>-->
    <span style="overflow-y: hidden;max-height: 375px;">
      <span class="col-xs-12 margin-bottom-5">
        <b>Dynamiser le parcours demandeur d'emploi</b> tout en le sécurisant</span><br/>
      <span class="col-xs-12 margin-bottom-5">
        <b>Préparer</b> à l'emploi et <b>réduire</b> la durée
      </span> <br/> 
      <span class="col-xs-12 margin-bottom-5">
        <b>Lever les obstacles à l'emploi</b> : mobilité, garde d'enfant, freins socio économiques
      </span> <br/> 
      <span class="col-xs-12 margin-bottom-5">
        Partir des <b>besoins des entreprises</b> et des <b>compétences attendues</b>
      </span><br/>
      <span class="col-xs-12 margin-bottom-5"><b>
        Développer les compétences</b> transversales et transférables des participants <br/> 
      </span>
      <span class="col-xs-12 margin-bottom-5">
        <b>Mutualiser</b> les moyens
      </span>
    </span>
  </div>
</div>



<!-- /////////////////////////////////////////////////////  -->
  


  <div class="col-md-12 col-lg-12 col-sm-12 imageSection no-padding" 
     style=" position:relative;">

    <div class="col-xs-12 no-padding" style="background-color:#fff; max-width:100%; float:left;">
      

      <style>
        .btn-main-menu{
          border:2px solid transparent;
          min-height:100px;
        }
        .btn-main-menu:hover{
          border:2px solid #ccc;
        }
        .ourvalues img{
          height:70px;
        }

        .box-register label.letter-black{
          margin-bottom:3px;
          font-size: 13px;
        }
      </style>


      <div class="col-xs-12 no-padding" style="text-align:center;margin-bottom:24px;margin-top:100px;"> 
        <div class="col-xs-12 no-padding">
          <div class="col-md-12 col-sm-12 col-xs-12 padding-20" style="padding-left:100px;background-color: #f6f6f6; min-height:400px;">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 pull-left padding-20 shadow2" style="margin-top:-100px;margin-bottom:50px;background-color: #fff;font-size: 14px;">

              <div class="col-xs-12 font-montserrat ourvalues" style="text-align:center;">
                        <!-- <div class="col-md-1 col-sm-1 hidden-xs"></div> -->
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6" style="text-align:center;">
                          <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/LOGO.jpg"/>
                             VILLE LE PORT
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
                          <a href="#annonces?searchSType=jobs&source=poleEmploi"><img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/pôle-emploi-logo-300x300.jpg"/>
                             POLE EMPLOI</a>
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
                          <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/cma.jpg"/>
                             CHAMBRE DE METIERS ET DE L'ARTISANAT de la Réunion 
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
                          <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/tco.png"/>
                             TERRITOIRE <br/>DE LA COTE OUEST
                        </div>
                        
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
                          <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/dep.jpg"/>
                             DEPARTEMENT RÉUNION
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
                          <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/logo_mls.png"/>
                             MISSIONS LOCALES
                        </div>
                        <div class="visible-lg col-lg-3">
                          <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/CCIr.jpg"/>
                             CHAMBRE DE COMMERCE ET DE L'INDUSTRIE RÉUNION
                        </div>
                        <div class="visible-lg col-lg-3">
                          <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/Logo_CR-Reunion1.png"/>
                             RÉGION RÉUNION
                        </div>
                    </div>
                  </div>
            



<!-- /////////////////////////////////////////////////////  -->




            <h3 class="col-xs-12 text-center">
              <i class="fa fa-gavel"></i> Démo Pratique <br>
              <small>
                L'innovation au service de la démocratie<br>
              </small>
              <hr style="width:40%; margin:20px auto; border: 4px solid #cecece;">
            </h3>

                    <a href="javascript:;" data-hash="#annonces" class=" btn-main-menu lbh-menu-app col-xs-12 col-sm-6 col-md-4 col-md-offset-2 padding-10 margin-top-5" data-type="classifieds" >
                        <div class="text-center">
                            <div class="col-md-12 no-padding text-center">
                                <h4 class="no-margin text-red">
                                  <i class="fa fa-users"></i>
                                  QUI
                                    <br><small class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </small>
                                </h4>
                            </div>
                        </div>
                    </a>
            <a href="javascript:;" data-hash="#search" class="btn-main-menu lbh-menu-app col-xs-12 col-sm-6 col-md-4 padding-10 margin-top-5" data-type="search" >    
                        <div class="text-center">
                            <!-- <h4 class="text-red no-margin "><i class="fa fa-search"></i>
                                <span class="homestead"> <?php //echo Yii::t("home","SEARCH") ?></span>
                            </h4><br/> -->
                            <div class="col-md-12 no-padding text-center">
                                <h4 class="no-margin text-red">
                                  <i class="fa fa-question"></i>
                                  QUOI
                                    <br>
                                    <small class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </small>
                                </h4>
                            </div>
                        </div>
                    </a>

                    
                    
                    <a href="javascript:;" data-hash="#live" class="btn-main-menu lbh-menu-app col-xs-12 col-sm-6 col-md-4 padding-10 margin-top-5" > 
                        <div class="text-center">
                            <div class="col-md-12 no-padding text-center">
                                <h4 class="no-margin text-red">
                                  <i class="fa fa-cog"></i>
                                  COMMENT 
                                    <br><small class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </small>
                                </h4>
                            </div>
                        </div>
                    </a>
                            <div class=" col-xs-12 col-sm-6 col-md-4 padding-20 hidden-xs hidden-sm" style="">
              <img class="img-responsive" style="margin:0 auto;margin-top: 0px;" src="<?php echo Yii::app()->session['custom']["logo"] ?>"/>
            </div>  
                    <a href="javascript:;" data-hash="#agenda" class="btn-main-menu lbh-menu-app col-xs-12 col-sm-6 col-md-4 padding-10 margin-top-5" data-type="agenda">
                        <div class="text-center">
                            <div class="col-md-12 no-padding text-center">
                                <h4 class="no-margin text-red">
                                  <i class="fa fa-cogs"></i>
                                  COMMENT
                                    <br><small class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </small>
                                </h4>
                            </div>
                        </div>
                    </a>
                   

        </div>

    </div>




<!-- /////////////////////////////////////////////////////  -->  





  <div class="col-xs-12 no-padding" style="background-color:#E33551; max-width:100%; float:left;" id="teamSection">
    
    <center>
      <i class="fa fa-caret-down" style="color:#f6f6f6"></i><br/>

      <h1 class="homestead" style="color:#fff">
        <i class="fa fa-gavel text-white"></i> DEMORUN
      </h1>
      
          
      <style>.hhh a{color:white; font-weight: bold;text-transform: underline;}</style>
      <div class="col-sm-12 text-white padding-bottom-15 hhh">
        <h3>
          <small class="text-white">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </small>
        </h3>

        <!-- <i>"EN AMÉLIORATION CONTINUE"</i> -->
        <br>
        <hr style="width:40%; margin:10px auto; border: 4px solid #f68989;">
        <h3 class="no-margin"><i class="fa fa-link"></i> Rejoignez-nous !</h3><br>
        
      </div>
    </center>
    <div class="space20"></div>
  </div>

  <div class="col-md-12 font-montserrat padding-bottom-50" style="color:#293A46; float:left; width:100%;">
    <center>
      <i class="fa fa-caret-down" style="color:<?php echo Yii::app()->session['custom']["color"] ?>"></i>
      <br/>
      
      <a class="lbh"  href="#@co-communication">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-building fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #BTP </span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Share and imagine great ideas") ?> <br/></span>
        </div>  
      </a>

      <a class="lbh"  href="#@codesign">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-coffee fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #ADMINISTRATIF </span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Ideas Design Graphics Video") ?> <br/></span>
        </div>  
      </a>
      
      <a class="lbh"  href="#@codev">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-desktop fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #NUMÉRIQUE </span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Core Development team") ?> <br/></span>
        </div>
      </a>

      <a class="lbh"  href="#@communecter">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-lightbulb-o fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #ECONOMIE </span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Project Management") ?> <br/></span>
        </div>  
      </a>


      <a class="lbh"  href="#@openatlas">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-group fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #SOCIAL </span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Non Governmental Organization") ?> <br/></span>
        </div>  
      </a>


      <a class="lbh"  href="#@pixelhumain">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-circle-thin fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #SERVICE PUBLIQUE </span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Active contributors and soon a cooperative") ?> <br/></span>
        </div>  
      </a>

      <a class="lbh"  href="#@connections">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-connectdevelop fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #AGRICULTURE </span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "All people we meet.") ?> <br/></span>
        </div>  
      </a>
      
      <a class="lbh"  href="#@cofinanceur">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-heart fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #METIER DE LA MER</span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Money for bills & Love to live.") ?> <br/></span>
        </div>
      </a>

      <a class="lbh"  href="#@cotest">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-child fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #RESSOURCES HUMAINES</span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Good tools have great testers") ?> <br/></span>
        </div>
      </a>

      <a class="lbh"  href="#@cobugs">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-plane fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #TOURISME </span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Help share & destroy bugs") ?> <br/></span>
        </div>  
      </a>

      <a class="lbh"  href="#@cointerop">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-ambulance fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #SANTÉ</span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Connecting Systems together") ?> <br/></span>
        </div>
      </a>
      
      <a class="lbh"  href="#@cotools">
        <div class="ahover bg-white padding-10 col-sm-12 col-md-4">
          <i class="fa fa-bus fa-2x"></i>
          <br/>
          <span class="uppercase text-red" style="font-size: 18px;"> #TRANSPORT</span><br/>
          <span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Open Source Tools For Communities") ?> <br/></span>
        </div>
      </a>

  </center>
  </div>


<!-- /////////////////////////////////////////////////////  -->


<div class="col-xs-12 no-padding" style="background-color:<?php echo Yii::app()->session['custom']["color"] ?>; max-width:100%; float:left;" id="teamSection">
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




<!-- /////////////////////////////////////////////////////  -->




<div class="row margin-top-20  padding-20">

  <div class="col-xs-12 margin-top-20">
    <div class="col-sm-6 col-xs-12"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/demorun/944915_1708657336078829_2180687933615805750_n.jpg'> </div>
    <div class="col-sm-6 col-xs-12 padding-20">
    <h1 class="text-center">TIRAGE AU SORT</h1>
    <div class=" padding-20">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in.<br/><a href="" class="btn btn-default">JE M'ENGAGE</a></div></div>
  </div>
  
  <div class="col-xs-12">
    <div class="col-sm-6 col-xs-12 padding-20">
    <h1 class="text-center">LA POLITIQUE c'est NOUS</h1>
    <div class=" padding-20">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquaborum.
    <br/><a href="" class="btn btn-default">JE PARTICIPE</a></div></div>
    <div class="col-sm-6 col-xs-12"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/demorun/12418069_1708657392745490_5279476619615651377_n.jpg'> </div>
    </div>
  </div>

  <div class="col-xs-12">
    <div class="col-sm-6 col-xs-12"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/demorun/57a9ef85cc8c7.jpg'> </div>
    <div class="col-sm-6 col-xs-12 padding-20">
    <h1 class="text-center">INTELLIGENCE COLLECTIVE</h1>
    <div class=" padding-20">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut alm.
    <br/><a href="" class="btn btn-default">J'AGIS</a></div></div>
  </div>

  <div class="col-xs-12">
    
    <div class="col-sm-6 col-xs-12 padding-20">
    <h1 class="text-center"> EXPERIMENTATION ET PARTAGE</h1>
    <div class=" padding-20">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex .<br/><a href="" class="btn btn-default">JE PARTICIPE</a></div></div>
    <div class="col-sm-6 col-xs-12"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/demorun/81_dominguez_000_lg.jpg'> </div>
  </div>

  <div class="col-xs-12">
    <div class="col-sm-6 col-xs-12"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/demorun/foule-paris.jpg'> </div>
    <div class="col-sm-6 col-xs-12 padding-20">
    <h1 class="text-center">JE VOTE </h1>
    <div class=" padding-20">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex.
    <br/><a href="" class="btn btn-default">JE VOTE</a></div></div>
  </div>


</div>


<!-- /////////////////////////////////////////////////////  -->





<div class="col-xs-12 padding-20" style=" max-width:100%; float:left;" id="teamSection">
    
    <div class="card col-xs-12 col-sm-4 ">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:140px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-comments fa-2x"></i><br/>
              ACTU 1
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Lorem ipsum dolor 
          </span>

      </div>
    </div>

    <div class="card col-xs-12 col-sm-4">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:140px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-comments fa-2x"></i><br/>
              ACTU 2
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Lorem ipsum dolor 
          </span>
      </div>
    </div>

    <div class="card col-xs-12 col-sm-4">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:140px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-comments fa-2x"></i><br/>
              ACTU 3
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Lorem ipsum dolor 
          </span>
      </div>
    </div>

    <div class="card col-xs-12 text-center padding-20">
      <a href="" class="btn btn-default">JE DONNE</a> <a href="" class="btn btn-default">JE PARTICIPE</a> <a href="" class="btn btn-default">MIEUX COMPRENDRE</a>
    </div>

  </div>


<!-- /////////////////////////////////////////////////////  -->





<div class="col-xs-12 padding-20" style=" max-width:100%; float:left;" id="teamSection">
    
    <div class="card col-xs-12 col-sm-4 ">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:140px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-map-marker fa-2x"></i><br/>
              EVENT 1
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Lorem ipsum dolor 
          </span>

      </div>
    </div>

    <div class="card col-xs-12 col-sm-4">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:140px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-map-marker fa-2x"></i><br/>
              EVENT 2
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Lorem ipsum dolor 
          </span>
      </div>
    </div>

    <div class="card col-xs-12 col-sm-4">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:140px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-map-marker fa-2x"></i><br/>
              EVENT 3
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Lorem ipsum dolor 
          </span>
      </div>
    </div>
  </div>




<!-- /////////////////////////////////////////////////////  -->






<div class="col-xs-12 no-padding" style="background-color:#5c76b5; max-width:100%; float:left;" id="teamSection">
     <center>
       <i class="fa fa-caret-down" style="color:#f6f6f6"></i><br>
	 </center>



  <div class="col-xs-12 padding-20">
    <div class="col-xs-6">
      <h1 class="homestead" style="color:#fff">
      <i class="fa fa-calendar text-white"></i> AGENDA
      </h1>
      <img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/demorun/foule-paris.jpg'>
     </div>


    <div class="col-xs-6">
      <h1 class="homestead" style="color:#fff">
      <i class="fa fa-map-marker text-white"></i> CARTO
      </h1>
      <img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/demorun/foule-paris.jpg'>
     </div>

  </div>
</div>





<!-- /////////////////////////////////////////////////////  -->

  



<div class="col-xs-offset-1 col-xs-10 shadow2 padding-20 margin-top-20">
    <h3 class="text-center ">Les 4 étapes du CTE </h3>
    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:200px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-folder-open-o fa-2x"></i><br/>
              Résultat
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Lorem ipsum dolor 
          </span>

      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:200px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-gavel fa-2x"></i><br/>
              Ressources
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Lorem ipsum dolor 
          </span>
      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:200px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-flag-checkered fa-2x"></i><br/>
              Je vote
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Lorem ipsum dolor 
          </span>
      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15" style="border: 2px solid <?php echo Yii::app()->session['custom']["color"] ?>; border-radius: 10px;min-height:200px;">
          <h4 class="card-title bold text-dark text-center padding-5" style="border-bottom:1px solid white">
              <i class="margin-5 fa fa-cogs fa-2x"></i><br/>
              J'adhère
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding">
          Lorem ipsum dolor 
          </span>
      </div>
    </div>
  </div>




<!-- /////////////////////////////////////////////////////  -->




  
<div class="col-xs-12 no-padding" style="background-color:<?php echo Yii::app()->session['custom']["color"] ?>; max-width:100%; float:left;" id="teamSection">
     <center>
       <i class="fa fa-caret-down" style="color:#f6f6f6"></i><br>
    
      <i class="fa fa-question-circle-o fa-4x text-white"></i>
      <h1 class="homestead" style="color:#fff">
      UN HOMME OU UN CHOIX
      </h1>
      
      <div class="col-xs-8 col-md-4 col-md-offset-4 col-xs-offset-2">
        <div class="col-xs-4 padding-10 bg-white"> <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/LOGO.jpg"/></div>
        <div class="col-xs-4"> <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/prefecture-reunion.jpg"/>
                         </div>
        <div class="col-xs-4"> <img class="img-responsive" style="margin:0 auto;" 
                             src="<?php echo Yii::app()->getModule("eco")->assetsUrl; ?>/images/custom/leport/cgte.png"/>
                         </div>
      </div>
    </center>
    <div class="space20 col-xs-12" style="margin-bottom: 20px;"></div>
  </div>
  <div class="col-md-12 contact-map padding-bottom-50" style="color:#293A46; float:left; width:100%;" id="contactSection">
    <center>
      <i class="fa fa-caret-down" style="color:<?php echo Yii::app()->session['custom']["color"] ?>"></i>
      <h1 class="homestead">
      <?php echo Yii::t("home","CONTACT") ?>
      </h1>
      + 262 262 34 36 86<br>mailleport@leport.fr

      <br/><a href="https://github.com/pixelhumain/communecter" target="_blank"><?php echo Yii::t("home","powered by <span style='color:#E33551'>@communecter</span>") ?></a>
    <center>
  </div>

</div>






<script type="text/javascript">


<?php $layoutPath = 'webroot.themes.'.Yii::app()->theme->name.'.views.layouts.';
    $this->renderPartial($layoutPath.'home.peopleTalk'); ?>
var peopleTalkCt = 0;

jQuery(document).ready(function() {
   
   setInterval( "slideSwitch()", 5000 );

  topMenuActivated = false;
  hideScrollTop = true;
  checkScroll();
  loadLiveNow();
  $(".videoSignal").click(function(){
    openVideo();
  });

  peopleTalkCt = getRandomInt(0,peopleTalk.length);
  showPeopleTalk();


    $("#map-loading-data").hide();
  $(".mainmenu").html($("#modalMainMenu .links-main-menu").html());
  //$("#modalMainMenu .links-main-menu").html("");

  //setTimeout(function(){ $("#input-communexion").hide(300); }, 300);

  var timerCo = false;
      
  $("#main-search-bar").keyup(function(){
    if($("#main-search-bar").val().length > 2){
      if(timerCo != false) clearTimeout(timerCo);
      timerCo = setTimeout(function(){ 
        //$("#info_co").html("");
        $(".info_co").addClass("hidden");
        $("#change_co").addClass("hidden");
        searchType = ["cities"];
        loadingData=false;
        scrollEnd=false;
        totalData = 0;
        communexion.state = false ; 
        startSearch(0, 20);
      }, 500);
    }else{
      $(".info_co").removeClass("hidden");
      $("#dropdown_search").html("");
    }
  });


    $("#change_co").click(function(){
      $(".info_co, .input_co").removeClass("hidden");
    $("#change_co").addClass("hidden");

    });


  setTitle("<?php echo Yii::t("home","Welcome on") ?> <span class='text-red'>commune</span>cter","home","<?php echo Yii::t("home","Welcome on Communecter") ?>");
  $('.tooltips').tooltip();

  $("#btn-param-postal-code").click(function(){
    $("#div-param-postal-code").show(400);
  });

  $(".btn-show-map-home").click(function(){
    search.app="search";
    initCountType();
      initTypeSearch("all");
      $(this).html("<i class='fa fa-spin fa-circle-o-notch'></i> "+trad.currentlyloading);
    startSearch(0, 30, function(){
      if(typeof formInMap != "undefined" && formInMap.actived == true)
        formInMap.cancel(true);
        //else if(isMapEnd == false && notEmpty(contextData) && location.hash.indexOf("#page.type."+contextData.type+"."+contextData.id))
      //  getContextDataLinks();
      else{
        if(isMapEnd == false && contextData && contextData.map && location.hash.indexOf("#page.type."+contextData.type+"."+contextData.id) )
          Sig.showMapElements(Sig.map, contextData.map.data, contextData.map.icon, contextData.map.title);
          showMap();
      }
      $(".btn-show-map-home").html("<i class='fa fa-map-marker'></i> "+trad.showmap);
    });
  })
  // $('#searchBarPostalCode').keyup(function(e){
 //        clearTimeout(timeoutSearchHome);
 //        timeoutSearchHome = setTimeout(function(){ startSearch(); }, 800);
 //    });


    $(".explainLink").click(function() {
    showDefinition( $(this).data("id") );
    return false;
  });
    $(".keyword").click(function() {
      $(".keysUsages").hide();
      link = "<br/><a href='javascript:;' class='showUsage homestead yellow'><i class='fa fa-toggle-up' style='color:#fff'></i> Usages</a>";
      $(".keywordExplain").html( $("."+$(this).data("id")).html()+link ).fadeIn(400);
       $(".showUsage").off().on("click",function() { $(".keywordExplain").slideUp(); $(".keysUsages").slideDown();});
    });

    $(".keyword1").click(function() {
      $(".keysKeyWords").hide();
      link = "<br/><a href='javascript:;' class='showKeywords homestead yellow'><i class='fa fa-toggle-up' style='color:#fff'></i> Mots Clefs</a>";
      $(".usageExplain").html( $("."+$(this).data("id")).html()+link ).slideDown();
       $(".showKeywords").off().on("click",function() { $(".usageExplain").slideUp(); $(".keysKeyWords").slideDown();});
    });


    $(".btn-main-menu").mouseenter(function(){ 
        $(".menuSection2").addClass("hidden"); 
        if( $(this).data("type") ) 
            $("."+$(this).data("type")+"Section2").removeClass("hidden");
    }).click(function(e) {  
        e.preventDefault(); 
        $('#modalMainMenu').modal("hide"); 
        mylog.warn("***************************************"); 
        mylog.warn("bindLBHLinks",$(this).attr("href")); 
        mylog.warn("***************************************"); 
        var h = ($(this).data("hash")) ? $(this).data("hash") : $(this).attr("href"); 
        urlCtrl.loadByHash( h ); 
    }); 

    $(".tagSearchBtn").click(function(e) {  
        e.preventDefault(); 
        $('#modalMainMenu').modal("hide"); 
        mylog.warn( ".tagSearchBtn",$(this).data("type"),$(this).data("stype"),$(this).data("tags") ); 

        searchObj.types = $(this).data("type").split(",");
        
        if( $(this).data("stype") )
            searchObj.stype = $(this).data("stype");
        else
            searchObj.tags = $(this).data("tags");
        
        urlCtrl.loadByHash($(this).data("app"));
        urlCtrl.afterLoad = function () {     
            //we have to pass by a variable to set the values         
            searchType = searchObj.types;
        
            if( $(this).data("stype") )
                $('#searchSType').val(searchObj.stype);
            else
                $('#searchTags').val(searchObj.tags);
            startSearch();
            searchObj = {};
        }
    }); 

});
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
function showPeopleTalk(step)
{
  // if(!step)
  //  step = 1;
  // peopleTalkCt = peopleTalkCt+step;
  // if( undefined == peopleTalk[ peopleTalkCt ]  )
  //  peopleTalkCt = 0;
  // person = peopleTalk[ peopleTalkCt ];

  var html = "";
  $.each(peopleTalk, function(key, person){
  html += '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 padding-5" style="min-height:430px;max-height:430px;">' +
        '<div class="" style="max-height:240px; overflow:hidden; max-width:100%;">' +
        '<img class="img-responsive img-thumbnail peopleTalkImg" src="'+person.image+'"><br>' +
        '</div>' +
        '<span class="peopleTalkName">'+person.name+'</span><br>' +
        '<span class="peopleTalkProject">'+person.project+'</span><br>' +
        '<span class="peopleTalkComment inline-block">'+person.comment+'</span>' +
      '</div>';
  });

  $("#co-friends").html( html );
  // $(".peopleTalkName").html( person.name );
  // $(".peopleTalkImg").attr("src",person.image);
  // $(".peopleTalkComment").html("<i class='fa fa-quote-left'></i> "+person.comment+"<i class='fa fa-quote-right'></i> ");
  // $(".peopleTalkProject").html( "<a target='_blank' href='"+person.url+"'>"+person.project+"</a>" );

}

function openVideo(){
  $("#videoDocsImg").fadeOut("slow",function() {
    heightCont=$("#form-home-subscribe").outerHeight();
    $(".videoWrapper").height(heightCont);
    $(".videoWrapper").fadeIn('slow');
     var symbol = $("#autoPlayVideo")[0].src.indexOf("?") > -1 ? "&" : "?";
      //modify source to autoplay and start video
      $("#autoPlayVideo")[0].src += symbol + "autoplay=1";
      if($("#form-home-subscribe").length)
        $(".videoWrapper .h_iframe").css({"margin-top": ((heightCont-$(".videoWrapper .h_iframe").height())/2)+"px"});
  });
}

var timeoutSearchHome = null;

function showTagOnMap (tag) {

  mylog.log("showTagOnMap",tag);

  var data = {   "name" : tag,
           "locality" : "",
           "searchType" : [ "persons" ],
           //"searchBy" : "INSEE",
                 "indexMin" : 0,
                 "indexMax" : 500
                };

        //setTitle("","");$(".moduleLabel").html("<i class='fa fa-spin fa-circle-o-notch'></i> Les acteurs locaux : <span class='text-red'>" + cityNameCommunexion + ", " + cpCommunexion + "</span>");

    $.blockUI({
      message : "<h1 class='homestead text-red'><i class='fa fa-spin fa-circle-o-notch'></i> Recherches des collaborateurs ...</h1>"
    });

    showMap(true);

    $.ajax({
        type: "POST",
            url: baseUrl+"/" + moduleId + "/search/globalautocomplete",
            data: data,
            dataType: "json",
            error: function (data){
               mylog.log("error"); mylog.dir(data);
            },
            success: function(data){
              if(!data){ toastr.error(data.content); }
              else{
                mylog.dir(data);
                Sig.showMapElements(Sig.map, data);
                $.unblockUI();
              }
            }
    });

  //loadByHash('#project.detail.id.56c1a474f6ca47a8378b45ef',null,true);
  //Sig.showFilterOnMap(tag);
}



function loadLiveNow () {
  mylog.log("loadLiveNow CO2.php");
  var searchParams = {
    "tpl":"/pod/nowList",
    "searchLocalityCITYKEY" : new Array(""),
    "indexMin" : 0, 
    "indexMax" : 30 
  };

    //console.log("communexion : ", communexion);
  if($("#searchLocalityCITYKEY").val() != ""){
    searchParams.searchLocalityCITYKEY = new Array($("#searchLocalityCITYKEY").val());
  }else if(myScopes.communexion.values != null){
    if(typeof myScopes.communexion.values.cityKey != "undefined"){
      searchParams.searchLocalityCITYKEY = new Array(myScopes.communexion.values.cityKey);
    }
  }

  var searchParams = {
    "tpl":"/pod/nowList",
    "searchLocality" : getSearchLocalityObject(true),
    "indexMin" : 0, 
    "indexMax" : 30 
  };
    
    //console.log("communexion ?", communexion);

    ajaxPost( "#nowList", baseUrl+'/'+moduleId+'/element/getdatadetail/type/0/id/0/dataName/liveNow?tpl=nowList',
          searchParams, function(data) {
          bindLBHLinks();
  } , "html" );
}

function slideSwitch() {
    var $active = $('#slideshow IMG.active');
    var $next = $active.next();    
    
    $next.addClass('active');
    
    $active.removeClass('active');
}


</script>





