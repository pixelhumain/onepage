<style type="text/css">
	.trame{
		background-image: url("<?php echo Yii::app()->getModule("co2")->assetsUrl; ?>/images/delaunayL.png");
	}
</style>
<div class=" trame">
	<style type="text/css">
		#titleCostum{
			position: absolute;
			top: 350px;
			left: 0px;
			background-color: rgba(0,0,0,0.7);
			color:white;
			font-size: 44px;
			font-weight: bolder;
			z-index: 10;
			padding: 10px;
			text-align: center;
		}
	</style>

	<div id="titleCostum"><h1><?php echo (@$costum && @$costum["title"]) ? $costum["title"]  : $_GET["l"] ; ?></h1></div>

	<div class="row">

		
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
		    <li data-target="#docCarousel" data-slide-to="11" class=""></li>
		    <li data-target="#docCarousel" data-slide-to="12" class=""></li>
		    
		  </ol>

	  <!-- Wrapper for slides -->
	  <style type="text/css">
	  	div.item img{margin:auto;}
	  </style>
	  <div class="carousel-inner" style="height:500px" role="listbox">
		<div class="item active"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img01.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img02.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img03.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img04.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img05.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img06.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img07.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img08.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img09.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img10.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img11.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img12.jpg'> </div>
		<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img13.jpg'> </div>
	    
	  </div>
		
	</div>

	</div>

<style type="text/css">
	.Ltxt{background-color: white;}
</style>
	<div class="container margin-top-20 ">

		<div class="row">
			<div class="col-xs-12 bgDark">
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">L'écosystème numérique</h1>
				<div class=" padding-20 Ltxt">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<div class="text-center margin-top-20">
					<a href="" class="btn bold" style="background-color: #E5344D; color:white;">Découvrir</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/steps.png'> </div>
			</div>
		</div>

		<div class="col-xs-12 margin-top-20">
			<div class="col-sm-6 col-xs-12">
				<img class="hidden-xs img-responsive" style="width:100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img15.jpg'>
			</div>
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">moi aussi <br/>je suis un pixel</h1>
				<div class=" padding-20 Ltxt">
				Je fais parti de la filière numérique,  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<div class="text-center margin-top-20">
					<a href="" class="btn btn-primary">Ajoutez Moi à l'image</a>
				</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 bgDark">
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">Le numérique c koisa</h1>
				<div class=" padding-20 Ltxt">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/coeurTheme.png'> </div>
			</div>
		</div>

		<div class="col-xs-12 margin-top-20">
			<div class="col-sm-6 col-xs-12">
				<img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/coeur1.png'>
			</div>
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">Les acteurs</h1>
				<div class=" padding-20 Ltxt">
				<?php echo "les acteurs du num locale : ".count($organizations) ?> <br/>
				Je fais parti de la filière numérique,  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<div class="text-center margin-top-20">
					<a href="" class="btn btn-primary">Ajoutez Moi dans l'image</a>
				</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 bgDark">
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">Les projets</h1>
				<div class="Ltxt padding-20">
				<?php echo "les projets du num locale : ".count($projects) ?> <br/>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<div class="text-center margin-top-20">
					<a href="" class="btn bold" style="background-color: #E5344D; color:white;">Ajoutez un projet</a>
				</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<img class="hidden-xs img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img12.jpg'> </div>
			</div>
		</div>

		<div class="col-xs-12 margin-top-20">
			<div class="col-sm-6 col-xs-12">
				<img class="hidden-xs img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img01.jpg'>
			</div>
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">Les évènnements</h1>
				<div class=" padding-20 Ltxt">
				<?php echo "les évennements du num locale : ".count($events) ?> <br/>
				Je fais parti de la filière numérique,  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<div class="text-center margin-top-20">
					<a href="" class="btn btn-primary">Ajoutez Mon evennment</a>
				</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 bgDark">
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">Les news</h1>
				<div class="Ltxt padding-20">
				
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img07.jpg'> </div>
			</div>
		</div>

		<div class="col-xs-12 margin-top-20">
			<div class="col-sm-6 col-xs-12">
				<img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img08.jpg'>
			</div>
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">Vos Propositions pour le numérique à la Réunion</h1>
				<div class=" padding-20 Ltxt">
				Je fais parti de la filière numérique,  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<div class="text-center margin-top-20">
					<a href="" class="btn bold" style="background-color: #E5344D; color:white;" >Ajoutez une proposition</a>
				</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 bgDark">
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">Les formations aux numérique</h1>
				<div class="Ltxt padding-20">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<img class="hidden-xs img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img05.jpg'> </div>
			</div>
		</div>

		<div class="col-xs-12 margin-top-20">
			<div class="col-sm-6 col-xs-12">
				<img class="hidden-xs img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/img11.jpg'>
			</div>
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">Les services</h1>
				<div class=" padding-20 Ltxt">
					<a href="" class="btn btn-default margin-top-5" >Hebergeur</a>
					<a href="" class="btn btn-default margin-top-5" >Développeur</a>
					<a href="" class="btn btn-default margin-top-5" >Webmaster</a>
					<a href="" class="btn btn-default margin-top-5" >Graphiste</a>
					<a href="" class="btn btn-default margin-top-5" >Formateur</a>
					<a href="" class="btn btn-default margin-top-5" >Monteur Vidéo</a>
					<a href="" class="btn btn-default margin-top-5" >Illustrateur</a>
					<a href="" class="btn btn-default margin-top-5" >SysAdmin</a>
					<a href="" class="btn btn-default margin-top-5" >Réparateur</a>
					<a href="" class="btn btn-default margin-top-5" >Opérateur</a>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 bgDark">
			<div class="col-sm-6 col-xs-12 padding-20">
				<h1 class="text-center">Kes Kis Pass Terlà</h1>
				<div class="Ltxt padding-20">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<div class="text-center margin-top-20">
					<a href="" class="btn bold" style="background-color: #E5344D; color:white;" >en savoir plus : SMARTERRE</a>
				</div>	
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div id="kesskisspassCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Round button indicators -->
	  			<style type="text/css">
	  				.carousel-indicsators{list-style: none;}
	  			</style>
				  <ol class="carousel-indicsators">
				    <li data-target="#keskisspassCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#kesskisspassCarousel" data-slide-to="1" class=""></li>
				    <li data-target="#kesskisspassCarousel" data-slide-to="2" class=""></li>
				    
				  </ol>

				  <!-- Wrapper for slides -->
				  <style type="text/css">
				  	div.item img{margin:auto;}
				  </style>
				  <div class="carousel-inner" style="height:450px" role="listbox">
					<div class="item active"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/4steps.png'> </div>
					
					<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/planning.png'> </div>

					<div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/steps.png'> </div>
				  </div>
					
				</div>
			</div>
		</div>
	</div>


</div>

  <div class="space50"></div>

  <div class="col-xs-offset-1 col-xs-10 shadow2 padding-20 margin-top-20 margin-bottom-20">
    <h3 class="text-center "> Financeurs </h3>
    <div class="card col-xs-12 col-md-3">
        <a href="https://www.fondation-free.fr/" target="_blank"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/Fondation_Free.png'></a>
    </div>

    <div class="card col-xs-12 col-md-3 ">
        <a href="http://open-atlas.org/" target="_blank">
        <img class="img-responsive" style="width:100%" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/coeurNum/openatlas.png'>
        </a>
    </div>

    
  </div>


  <div class="space50"></div>

  <div class="col-xs-offset-1 col-xs-10 shadow2 padding-20 margin-top-20 margin-bottom-20">
    <h3 class="text-center "> TODO </h3>
    

- <b>remplissage</b> : formulaire de la filière <br/>
  orga <br/>
  projet <br/>
  ressource<br/>
  point de contact <br/>
  j'ai envie de mimpliquer dans le COEUR<br/>
  formualire de proposition <br/>
- <b>admin du COEUR (role)</b><br/>
- droit d'analyse (pending pour moderation)<br/>
  - moderation > suppresion <br/>
  - interaction via commentaire <br/>
  - possibilité chatter<br/>
- <b>lien d'affichage carte</b> <br/>
- <b>lien au travers</b> des tags , services, competence , besoin<br/>
- <br/>
- <b>apéro</b> , world café 30min<br/>
formulaire : vision amélioration de la filiere <br/>
- <b>visualisation</b> : listing, carto, graph , analyse de la filière <br/>
- who's who <br/>
- qui fait quoi <br/>
- qui est dans la filiere <br/>
- les liens existant entre les acteurs<br/>
- creer du potentiel de liens <br/>
- <b>connect to DNS</b><br/>
- <b>activate in CO</b><br/>
    
  </div>


