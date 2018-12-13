<?php 
	$themeParams = CO2::getThemeParams();

	$imgDefault = $this->module->assetsUrl.'/images/news/profile_default_l.png';

	//récupération du type de l'element
    $typeItem = (@$element["typeSig"] && $element["typeSig"] != "") ? $element["typeSig"] : "";
    if($typeItem == "") $typeItem = @$element["typeSig"] ? $element["type"] : "item";
    if($typeItem == "people") $typeItem = "citoyens";
    

    //Rest::json($element); exit;
    $test = Element::getAllLinks($element["links"],$element["typeSig"], (String)$element["_id"]);

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

    	$mapData = array();
    	$mapData = @$members ? array_merge($members, $mapData) : array();
    	$mapData = @$projects ? array_merge($projects, $mapData) : array();
    	$mapData = @$events ? array_merge($events, $mapData) : array();


$cssJS = array(
	'/plugins/reveal/css/reveal.css',
	'/plugins/reveal/css/theme/black.css',
	'/plugins/reveal/lib/css/zenburn.css',
	'/plugins/reveal/lib/js/head.min.js',
	'/plugins/reveal/js/reveal.js',
	'/js/api.js',
	'/plugins/jquery-validation/dist/jquery.validate.min.js',
); 

HtmlHelper::registerCssAndScriptsFiles($cssJS, Yii::app()->request->baseUrl);



//Module MAP
$cssAnsScriptFilesModule = array(
	'/leaflet/leaflet.css',
	'/leaflet/leaflet.js',
	'/markercluster/MarkerCluster.css',
	'/markercluster/MarkerCluster.Default.css',
	'/markercluster/leaflet.markercluster.js',
	'/css/map.css',
	'/js/map.js',
);
HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule, Yii::app()->getModule( Map::MODULE )->getAssetsUrl() );
 ?>
<script>
	var link = document.createElement( 'link' );
	link.rel = 'stylesheet';
	link.type = 'text/css';
	link.href = window.location.search.match( /print-pdf/gi ) ? baseUrl+'/plugins/reveal/css/print/pdf.css' : baseUrl+'/plugins/reveal/css/print/paper.css';
	document.getElementsByTagName( 'head' )[0].appendChild( link );
</script>

<style type="text/css">
.yelbord{color:yellow;border:1px solid yellow;}
</style>

<div class="reveal">

	<div class="slides">
		<section data-transition="slide" data-background="#191B16" data-background-transition="zoom">
			<section>
				<h1 style="color:yellow;border:1px solid yellow;" >Zone à défendre </h1>
				<h3 style="color:yellow"> <?php echo $element["name"]; ?> </h3>
				<p>
					<small><?php echo @$element["shortDescription"]; ?></small><br/>
					<img class="img-responsive" width="400" src='<?php echo $element["profilImageUrl"]; ?>'>
				</p>
			</section>

			<section>
				<h2 style="color:yellow;border:1px solid yellow;">Comment Agir ou Participer</h2>
				<div id="mapZad" style="width: 100%; height: 500px;"></div>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">Des barrages</h2>
				<p>
					<button class="btn btn-primary">Saint Denis</button>
					<button class="btn btn-primary">Etang Salé</button>
					<button class="btn btn-primary">Saint Joseph</button>
					<button class="btn btn-primary">Sainte Marie</button>
					<button class="btn btn-primary">Trois Bassins</button>
				</p>
			</section>

			<section>
	        	<h2 style="color:yellow;border:1px solid yellow;">S'informer</h2>
				<div id="timeline-page" style="width: 100%; height: 600px;"></div>
	        </section>
		</section>
		
		
		<section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">Un programme de société utopique</h2>
				<a href="" target="_blank" >Découvrir Smarterre</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">EDUCATION</h2>
					<ul>				
				    <li>Formation sur les pratiques de l'économie circulaire</li>
				    <li>Apprentissage des outils numeriques et citoyens</li>
				    <li>Utlisation et philosophie du Libre et Partage (Logiciel Libre, Wikipedia..)</li>
					</ul>
					<a href="https://www.communecter.org/#@educationGj974" target="_blank" >Rejoindre le groupe</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">AGRICULTURE</h2>
				<ul>
					<li>Plus de maraichage respectant les sols</li>
					<li>Introduire plus d'arbres producteurs</li>
					<li>Circuit court et glanage</li>
					<li>Transformation et distribution locale</li>
				</ul>
				<br><a href="https://www.communecter.org/#@agricultureGj974" target="_blank" >Rejoindre le groupe</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">ECONOMIE</h2>
				<ul>
					<li>Financement Participatif peut être une solution au manque de budget</li>
					<li>Monnaie Locale Réunionnaise, permet de créer une vraie économie locale</li>
				</ul>
				<a href="https://www.communecter.org/#@economieGj974" target="_blank" >Rejoindre le groupe</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">ENERGIE</h2>
				<ul>
					<li>Smart Grid : Production D'énergie Décentralisée</li>
				</ul>
				<a href="https://www.communecter.org/#@energieGj974" target="_blank" >Rejoindre le groupe</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">CITOYENNETÉ</h2>
				<ul>
					<li>Open Data, Transparence et accès a l'information</li>
					<li>Participation Citoyenne</li>
					<li>Citoyen Capteur (Mobile et Hardware)</li>
					<li>smart collector : citoyen contributeur au flux et revalorisation locale</li>
					<li>city indicateur (déchets,transport,capacité à créer du lien…)</li>
				</ul>
				<a href="https://www.communecter.org/#@citoyenneteGj974" target="_blank" >Rejoindre le groupe</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">DECHETS</h2>
				<a href="" target="_blank" >Rejoindre le groupe</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">ALIMENTATION</h2>

				<ul>
					<li>Jardin Maison </li>
					<li>Amap locale</li>
					<li>Permaculture appliquée</li>
					<li>Transport</li>
					<li>Covoiturage</li>
					<li>Nouvelle technologie</li>
					<li>Télé Travail</li>
				</ul>
				<a href="https://www.communecter.org/#@alimentationGj974" target="_blank" >Rejoindre le groupe</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">SANTÉ</h2>
				<a href="https://www.communecter.org/#@santeGj974" target="_blank" >Rejoindre le groupe</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">AMÉNAGEMENT</h2>
				
			    <li>Tourisme 2.0 : Guide Ultra Locaux</li>
    			<li>Meilleure connaissance et découverte locale</li>
				</ul>
				<a href="https://www.communecter.org/#@amenagementGj974" target="_blank" >Rejoindre le groupe</a>
			</section>
			<section>
				<h2 style="color:yellow;border:1px solid yellow;">TRAVAIL</h2>
			    <ul>
			<li>Espace de Coworking </li>
			<li>Actions et participations Citoyennes </li>
			<li>Garage, Crèche, garderie participative </li>
			<li>Emploi : la collaboration une clef de la réussite	</li>
			</ul>
			<a href="https://www.communecter.org/#@travailGj974" target="_blank" >Rejoindre le groupe</a>
			</section>
		</section>

		<section>
			<!-- <form id="form-invite" class="">
				<h2 style="color:yellow;border:1px solid yellow;">Rejoignez Nous</h2>
				<p>
					Email : <input type="email" name="email" id="email">
					<br/>
					Où : <select name="where">
						<option>St Leu</option>
						<option>Ste Marie</option>
						<option>Saint Denis</option>
					</select>
					<br/>
					Role : <select name="where">
						<option>Communiquant</option>
						<option>Informatique</option>
						<option>Organisateur</option>
						<option>Gestion</option>
						<option>Conseiller</option>
						<option>Financeur</option>
					</select>
					<br/>
					<button class="btn btn-success" id="btnInviteNew" ><i class="fa fa-add"></i> <?php //echo Yii::t("invite","Rejoindre"); ?> </button>
					
					<br><small>TODO : connecté à invite, as join + merci de valider votre email 
					<br>je trouve l'option du panneau invite trop compliqué
					</small>
				</p>
			</form> -->
			<?php
			if(!isset(Yii::app()->session['userId'])) { ?>
				<h2 style="color:yellow;border:1px solid yellow;">Rejoignez Nous</h2>
				<br/>
				<button class="btn btn-default bg-green margin-top-15 btn-lg btn-menu-connect" data-toggle="modal" data-target="#modalLogin">
					<i class="fa fa-sign-in"></i> <?php echo Yii::t("login","Log in") ?>
				</button>
				<button class="btn btn-link margin-top-15 btn-lg" data-toggle="modal" data-target="#modalRegister">
					<i class="fa fa-plus-circle"></i> <?php echo Yii::t("login","Create an account") ?>
				</button>

			<?php 
			}else{

			} ?>
		</section>

		<section>
			<a href="/survey/co/index/id/<?php echo $_GET['slug'] ?>/session/1" target="_blank" ><h2 style="border:1px solid yellow;color:yellow">Faites vos propositions</h2></a>

			<a href="/survey/co/answers/id/<?php echo $_GET['slug'] ?>/session/1" target="_blank" ><h2 style="border:1px solid yellow;color:yellow">les propositions</h2></a>
			<p>
				
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
			<h2 style="color:yellow;border:1px solid yellow;">Une Carte de la situation</h2>
			<p>
				<br><small>TODO : connecté à mapObj
				</small>
			</p>
		</section>

		

		<section class="bg-white row shadow padding-15" data-transition="slide" data-background="#ffffff" data-background-transition="zoom">
			<section id="timeline-page">
	        	
	        </section>
	                
	        <section>
	        	<h1>test sub section</h1>
	        </section>
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

var mapData = <?php echo json_encode(@$mapData) ?>;
var mapTest = <?php echo json_encode(@$test) ?>;

var contextData = {  
  name: "<?php echo $element['name'] ?>",
  type: "<?php echo $type ?>",
  slug: "<?php echo $_GET['slug'] ?>",
  typeSig: "<?php echo $type ?>",
  id: "<?php echo (string)$element['_id'] ?>"
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
        "map": <?php echo json_encode( Map::getConfig() ) ?>,
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
var debug = true;
function loadNewsStream(){
	//KScrollTo("#profil_imgPreview");
	var url = "news/co/index/type/"+contextData.type+"/id/"+contextData.id;
	setTimeout(function(){ //attend que le scroll retourn en haut (kscrollto)
		
		ajaxPost('#timeline-page', baseUrl+'/'+url, 
			{
				formCreate:false,
				inline:true,
				nbCol:3,
				scroll:false,
				indexStep:3
			},
			function(){ 
				//if(typeItem=="citoyens") loadLiveNow();
	            /*$(window).bind("scroll",function(){ 
				    if(!loadingData && !scrollEnd && colNotifOpen){
				          var heightWindow = $("html").height() - $("body").height();
				          if( $(this).scrollTop() >= heightWindow - 1000){
				            loadStream(currentIndexMin+indexStep, currentIndexMax+indexStep, isLiveBool);
				          }
				    }
				});
				loadingData = false;*/
		},"html");
	}, 700);
}

jQuery(document).ready(function() {

	// SLIDE NEWS 
	//**************************************
	loadNewsStream();

	//SLIDE MAP
	//**************************************

	var paramsMapZAD = {
		container : "mapZad",
		activeCluster : false
	};
	mapObj.init(paramsMapZAD);
	mapObj.addElts(mapTest, true);

	



	
	//SLIDE INIT
	//**************************************

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
			/*{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
			{ src: 'plugin/search/search.js', async: true },
			{ src: 'plugin/zoom-js/zoom.js', async: true },
			{ src: 'plugin/notes/notes.js', async: true }*/
		]
	});


      
  });

	
</script>
