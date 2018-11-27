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

<?php 
$cssJS = array(
	'/plugins/reveal/css/reveal.css',
	'/plugins/reveal/css/theme/black.css',
	'/plugins/reveal/lib/css/zenburn.css',
	'/plugins/reveal/lib/js/head.min.js',
	'/plugins/reveal/js/reveal.js'
); 

HtmlHelper::registerCssAndScriptsFiles($cssJS, Yii::app()->request->baseUrl);


 ?>
<script>
	var link = document.createElement( 'link' );
	link.rel = 'stylesheet';
	link.type = 'text/css';
	link.href = window.location.search.match( /print-pdf/gi ) ? baseUrl+'/plugins/reveal/css/print/pdf.css' : baseUrl+'/plugins/reveal/css/print/paper.css';
	document.getElementsByTagName( 'head' )[0].appendChild( link );
</script>
<div class="reveal">

	<div class="slides">
		<section data-transition="slide" data-background="#191B16" data-background-transition="zoom">
			<section>
				<h1>La Réunion </h1>
				<h3>Zone à défendre </h3>
				<p>
					<small>Le Virtuel pour renforcer le réél</small><br/>
					<img class="img-responsive" width="400" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img3.jpg'>
				</p>
			</section>

			<section>
				<h2>Comment Agir ou Participer</h2>
				<p>Nested slides are useful for adding additional detail underneath a high level horizontal slide.</p>
			</section>
			
			<section>
				<h2>Des barrages</h2>
				<p>
					<button class="btn btn-primary">Saint Denis</button>
					<button class="btn btn-primary">Etang Salé</button>
					<button class="btn btn-primary">Saint Joseph</button>
					<button class="btn btn-primary">Sainte Marie</button>
					<button class="btn btn-primary">Trois Bassins</button>
				</p>
			</section>
		</section>

		<section>
			<h2>Rejoignez le barrage</h2>
			<h3>Zone À Défendre </h3>
			<p>
				Email : <input type="email" name="email">
				<br/><br/>
				Où : <select name="where">
					<option>St Leu</option>
					<option>Ste Marie</option>
					<option>Saint Denis</option>
				</select>
				<br><small>TODO : connecté à invite, as join + merci de valider votre email 
				</small>
			</p>
		</section>

		<section>
			<h2>Faite vos propositions</h2>
			<p>
				<textarea style="height:400px; width:100%"></textarea>
				<br>
				<small>conecté à survey
				<br>TODO : une fois invité on peut repondre un survey seulement si mail validé
				<br>TODO : seul les compte avec mdp pourront modifier leur proposition</small>

			</p>
		</section>

		
		<section>
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
											"edit" => false,
											"imgShape" => "square",
											"useDesc" => false,
											"useBorderElement"=>$useBorderElement,
											"countStrongLinks"=>@$countStrongLinks,
											"styleParams" => array(	"bgColor"=>"#FFF",
															  		"textBright"=>"dark",
															  		"fontScale"=>3),
											));
    ?>
			
		</section>

		

		<section>
			<h2>Une Carte de la situation</h2>
			<p>
				<br><small>TODO : connecté à mapObj
				</small>
			</p>
		</section>

		

		<section id="timeline" class="bg-white row shadow padding-15" data-transition="slide" data-background="#ffffff" data-background-transition="zoom">
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
	                    <br><small>TODO : connecté à l'actu
				</small>
	                    <i class="fa fa-angle-down"></i>
	                </h2>
	            </div>
	        </div>

			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<ul class="timeline inline-block" id="timeline-page">
				</ul>
			</div>
		</section>

		<section>
			<h2>Évennements</h2>
			<p>
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
			</p>
		</section>

		<section data-background="http://i.giphy.com/90F8aUepslB84.gif">
			<h2>... Surprise!</h2>
		</section>

		<section>
			<section id="fragments" data-transition="slide" data-background="#000000" data-background-transition="zoom">
				<h2>Nombres de membres </h2>
				<h2>Nombres de barages </h2>
			</section>
			
		</section>



		<section data-transition="slide" data-background="#4d7e65" data-background-transition="zoom">
			<h2>Charte</h2>
			<ul>
				<li> Respect </li>
				<li> Protection </li>
				<li> Agilité </li>
				<li> Engagement</li>
			</ul>
		</section>




	</div>

</div>

<script type="text/javascript" >
var contextData = {  
  "name": "<?php echo $element['name'] ?>",
  "type": "<?php echo $type ?>",
  "slug": "<?php echo $_GET['slug'] ?>",
  "typeSig": "<?php echo $type ?>",
  "id": "<?php echo $id ?>"
};

var networkJson = {
	add : {
		"organization" : {}, 
		"project"  : {}, 
		"event" : {}
	},
	//dynForm : { extra : ["Numerique", "Hebergeur", "Développeur", "Graphiste", "SysAdmin", "Community Manager" ] }, 
	request : {
		//mainTag : "numerique",
		parent : {
			id: "<?php echo $id ?>",
			type : "<?php echo $type ?>"
		},
		sourceKey : ["<?php echo $element['slug'] ?>"],
		searchTag : [<?php //echo implode(",", @$element['tags']) ?> ]
	}
};

//InitJS
var modules = {
        //Configure here eco
        "classifieds":<?php echo json_encode( Classified::getConfig("classifieds") ) ?>,
        "jobs":<?php echo json_encode( Classified::getConfig("jobs") ) ?>,
        "ressources":<?php echo json_encode( Classified::getConfig("ressources") ) ?>,
        "places": <?php echo json_encode( Place::getConfig() ) ?>,
        "poi": <?php echo json_encode( Poi::getConfig() ) ?>,
        "chat": <?php echo json_encode( Chat::getConfig() ) ?>,
        "interop": <?php echo json_encode( Interop::getConfig() ) ?>,
        "eco" : <?php echo json_encode( array(
            "module" => "eco",
            "url"    => Yii::app()->getModule( "eco" )->assetsUrl
        )); ?>,
        "survey" : <?php echo json_encode( array(
            "url"    => Yii::app()->getModule( "survey" )->assetsUrl
        )); ?>,
        "co2" : <?php echo json_encode( array(
            "url"    => Yii::app()->getModule( "co2" )->assetsUrl
        )); ?>,
        "cotools" : <?php echo json_encode( array(

            "module" => "cotools",
            "init"   => Yii::app()->getModule( "cotools" )->assetsUrl."/js/init.js" ,
            "form"   => Yii::app()->getModule( "cotools" )->assetsUrl."/js/dynForm.js" ,

        )); ?>
    };

function loadDataDirectory(dataName, dataIcon, edit){ 
 	mylog.log("loadDataDirectory", dataName, dataIcon, edit);
	showLoader('#central-container');
	var dataIcon = $(".load-data-directory[data-type-dir="+dataName+"]").data("icon");
	getAjax('', baseUrl+'/'+moduleId+'/element/getdatadetail/type/'+contextData.type+
				'/id/'+contextData.id+'/dataName/'+dataName+'?tpl=json',
				function(data){ 
					var type = ($.inArray(dataName, ["poi","ressources","vote","actions","discuss"]) >=0) ? dataName : null;
					if(typeof edit != "undefined" && edit)
						edit=dataName;
					mylog.log("loadDataDirectory edit" , edit);
					displayInTheContainer(data, dataName, dataIcon, type, edit);
					bindButtonOpenForm();
				}
	,"html");
}

function loadNewsStream(isLiveBool){

	//KScrollTo("#profil_imgPreview");
	isLiveNews = isLiveBool==true ? "/isLive/true" : ""; 
	dateLimit = 0;
	scrollEnd = false;
	loadingData = true;
	//toogleNotif(true);

	var url = "news/index/type/"+typeItem+"/id/"+contextData.id+isLiveNews+"/date/"+dateLimit+"?isFirst=1&tpl=co2&renderPartial=true";
	
	setTimeout(function(){ //attend que le scroll retourn en haut (kscrollto)
		
		ajaxPost('#timeline-page', baseUrl+'/co2/'+url, 
			null,
			function(){ 
				//if(typeItem=="citoyens") loadLiveNow();
	            $(window).bind("scroll",function(){ 
				    if(!loadingData && !scrollEnd && colNotifOpen){
				          var heightWindow = $("html").height() - $("body").height();
				          if( $(this).scrollTop() >= heightWindow - 1000){
				            loadStream(currentIndexMin+indexStep, currentIndexMax+indexStep, isLiveBool);
				          }
				    }
				});
				loadingData = false;
		},"html");
	}, 700);
}

jQuery(document).ready(function() {

	//initOnepageInterface();


      // More info https://github.com/hakimel/reveal.js#configuration
	Reveal.initialize({
		controls: true,
		progress: true,
		history: true,
		center: true,

		transition: 'zoom', // none/fade/slide/convex/concave/zoom

		// More info https://github.com/hakimel/reveal.js#dependencies
		dependencies: [
			{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
			{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
			{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
			{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
			{ src: 'plugin/search/search.js', async: true },
			{ src: 'plugin/zoom-js/zoom.js', async: true },
			{ src: 'plugin/notes/notes.js', async: true }
		]
	});


      
  });

	
</script>
