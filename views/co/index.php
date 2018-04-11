<?php 

/* *************************************
on garde les librairies specifique au module dans le module
*******************************************/

$cssAnsScriptFilesModule = array(
	'/js/co.js',
	//'/js/default/directory.js',
	'/js/default/index.js',
	'/js/default/editInPlace.js',
	'/js/dataHelpers.js',
	//'/js/sig/localisationHtml5.js',
	'/js/floopDrawerRight.js',
	//'/css/freelancer.css',
    //'/js/sig/geoloc.js',
	//'/js/default/formInMap.js',
	//'/js/default/formInMapOld.js',
	'/js/default/globalsearch.js',
	'/js/cooperation/uiCoop.js',
	'/js/cooperation/uiModeration.js',
	//'/js/sig/findAddressGeoPos.js',
	'/js/jquery.filter_input.js',
	//'/js/breadcrum_co.js'
	'/css/md.css',
);
HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule, $this->module->getParentAssetsUrl() );


//assets from ph base repo
$cssAnsScriptFilesTheme = array(
	'/plugins/showdown/showdown.min.js',
	'/plugins/to-markdown/to-markdown.js'
);
HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesTheme, Yii::app()->request->baseUrl);


$parentModuleId = ( @Yii::app()->params["module"]["parent"] ) ?  
					 Yii::app()->params["module"]["parent"] : $this->module->id;

Yii::app()->getClientScript()->registerScriptFile(
		Yii::app() -> createUrl($parentModuleId.
								"/default/view/page/trad/dir/..|translation/layout/empty"));
        

?>


<script type="text/javascript">
	var directoryViewMode = "block";
</script>


<?php 
    $CO2DomainName = isset(Yii::app()->params["CO2DomainName"]) ? 
    					   Yii::app()->params["CO2DomainName"] : "CO2";
	$me = isset(Yii::app()->session['userId']) ? Person::getById(Yii::app()->session['userId']) : null;
    $parentModuleId = ( @Yii::app()->params["module"]["parent"] ) ?  
						Yii::app()->params["module"]["parent"] : $this->module->id;

	//get all my link to put in floopDrawer
    if(isset(Yii::app()->session['userId'])){
      $myContacts = Person::getPersonLinksByPersonId(Yii::app()->session['userId']);
      $myFormContact = $myContacts; 
      $getType = (isset($_GET["type"]) && $_GET["type"] != "citoyens") ? $_GET["type"] : "citoyens";
    }else{
      $myFormContact = null;

    }

    $communexion = CO2::getCommunexionCookies();

    $layoutPath = 'webroot.themes.'.Yii::app()->theme->name.'.views.layouts.';
	$this->renderPartial($layoutPath.'initJs', 
                             array( "me"=>$me, 
                             		"parentModuleId" => $parentModuleId, 
                             		"myFormContact" => @$myFormContact, 
                             		"communexion" => $communexion));

	 
    if(Yii::app()->language!="en")
        array_push($cssAnsScriptFilesModule,
        		"/plugins/jquery-validation/localization/messages_".Yii::app()->language.".js");

	$cssAnsScriptFilesModule = array(
                '/plugins/jquery-ui-1.12.1/jquery-ui.min.js',
                '/plugins/jquery-ui-1.12.1/jquery-ui.min.css',
                
                '/plugins/jquery-validation/dist/jquery.validate.min.js',
                '/plugins/bootbox/bootbox.min.js' , 
                '/plugins/blockUI/jquery.blockUI.js' , 
                '/plugins/toastr/toastr.js' , 
                '/plugins/toastr/toastr.min.css',
               // '/plugins/jquery.ajax-cross-origin.min.js',
                '/plugins/jquery-cookie/jquery.cookie.js' , 
                '/plugins/lightbox2/css/lightbox.css',
                '/plugins/lightbox2/js/lightbox.min.js',
                '/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js' , 
                '/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css',
                '/plugins/jquery-cookieDirective/jquery.cookiesdirective.js' , 
                '/plugins/ladda-bootstrap/dist/spin.min.js' , 
                '/plugins/ladda-bootstrap/dist/ladda.min.js' , 
                '/plugins/ladda-bootstrap/dist/ladda.min.css',
                '/plugins/ladda-bootstrap/dist/ladda-themeless.min.css',
                '/plugins/animate.css/animate.min.css',
                '/plugins/jQuery-contextMenu/dist/jquery.contextMenu.min.js' , 
                '/plugins/jQuery-contextMenu/dist/jquery.contextMenu.min.css' , 
                '/plugins/jQuery-contextMenu/dist/jquery.ui.position.min.js' , 
                
                '/plugins/select2/select2.min.js' , 
                '/plugins/moment/min/moment.min.js' ,
                '/plugins/moment/min/moment-with-locales.min.js',
                '/plugins/jquery.dynForm.js',
                '/plugins/jquery.appear/jquery.appear.js',

                '/plugins/jquery.elastic/elastic.js',
                '/plugins/underscore-master/underscore.js',
                '/plugins/jquery-mentions-input-master/jquery.mentionsInput.js',
                '/plugins/jquery-mentions-input-master/jquery.mentionsInput.css',
                //'/js/cookie.js' ,
                '/js/api.js',
                
                '/plugins/animate.css/animate.min.css',
                '/plugins/font-awesome/css/font-awesome.min.css',
                '/plugins/font-awesome-custom/css/font-awesome.css',

                '/plugins/cryptoJS-v3.1.2/rollups/aes.js'
            );
            HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule, Yii::app()->getRequest()->getBaseUrl(true));

			/* ***********************
            theme stuff
            ************************ */
            $cssAnsScriptFilesModule = array(
                '/assets/js/cookie.js' ,
                '/assets/js/jqBootstrapValidation.js' ,
				'/assets/js/comments.js',
                
                //'/assets/data/mainCategories.js' ,
                
                '/assets/vendor/bootstrap/js/bootstrap.min.js',
                '/assets/vendor/bootstrap/css/bootstrap.min.css',
                '/assets/css/sig/sig.css',
                '/assets/css/freelancer.css',
               // '/assets/css/default/dynForm.css',

                '/assets/css/CO2/CO2-boot.css',
                '/assets/css/CO2/CO2-color.css',
                '/assets/css/CO2/CO2.css',
                //'/assets/css/onepage.css',
                '/assets/css/timeline2.css',
                '/assets/css/news/newsSV.css',

                '/assets/css/cooperation.css',
                //'/assets/css/plugins.css',
                 // TODO BOUBOULE - Radio à ne pas appeler pour CO2
                //'/assets/vendor/jPlayer-2.9.2/dist/skin/blue.monday/css/jplayer.blue.monday.min.css',
                //'/assets/vendor/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js',
                //'/assets/js/radioplayer.js',
    
                // '/assets/css/floopDrawerRight.css',
				'/assets/vendor/colorpicker/js/colorpicker.js',
				'/assets/vendor/colorpicker/css/colorpicker.css',
            );
            HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule, Yii::app()->theme->baseUrl);

            $cssAnsScriptFilesModule = array('/css/onepage.css');
			HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule, $this->module->getAssetsUrl());

?>

<progress class="progressTop" max="100" value="20"></progress>   

<div id="mainMap">
    <?php 
    $modulePath = ( @Yii::app()->params["module"]["parent"] ) ?  
    				"../../../".$parentModuleId."/views"  : "..";
    $this->renderPartial( $layoutPath.'mainMap.'.Yii::app()->params["CO2DomainName"], array("modulePath"=>$modulePath )); ?>
</div>

<?php $this->renderPartial($layoutPath.'menusMap/'.$CO2DomainName, 
		array( "layoutPath"=>$layoutPath, "me" => $me ) ); 

?>  
<div class="main-container col-md-12 col-sm-12 col-xs-12 no-padding">
	<div class="col-md-12 col-sm-12 col-xs-12 no-padding social-main-container">
		<div id="onepage">
		<?php $this->renderPartial("onepage", array("element"=>$element,
			        							   "type"=>Person::COLLECTION,
			        							   "me"=>$me,
			        							   "edit"=>true,
			        							   "openEdition"=>true,
			        							   "layoutPath" => $layoutPath)); ?>
		</div>
	</div>
</div>


<div id="modal-preview-coop" class="shadow2 hidden"></div>