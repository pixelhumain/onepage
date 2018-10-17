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


?>


<style type="text/css">
	.trame{
		background-image: url("<?php echo Yii::app()->getModule("co2")->assetsUrl; ?>/images/delaunayL.png");
	}

.toolbar-bottom{
    position: fixed;
    bottom: 10px;
    height: 50px;
    /*border-top: 1px solid #bcbcbc;
    border-left: 1px solid #bcbcbc;*/
    background-color: transparent;
    /*border-radius: 0px 0 0 0;*/
    text-align: right;
    padding: 0px;
    /*-webkit-box-shadow:0px 0px 5px 1px rgba(0, 0, 0, 0.5);
    -moz-box-shadow:0px 0px 5px 1px rgba(0, 0, 0, 0.5);
    box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.5);*/
}
.toolbar-bottom.bottom-left{
	left: 10px;
}
.toolbar-bottom.bottom-right{
	right:10px;
}
.toolbar-bottom-adds{
    background-color: transparent !important;
}
.toolbar-bottom-adds .addBtnFoot{
    border-radius: 5px;
    width: 100%;
    color: white !important;
    border: none;
    text-align: left;
}
#show-bottom-add, #donation-btn{
	border-radius: 100%;
    width: 50px;
    border: none;
    height: 50px;
}
#donation-btn{
	color: white;
	background-color:#E5344D;
	line-height: 55px;
	padding: 0px;
}
#donation-btn i{
	font-size: 20px;
}
#show-bottom-add.opened{
    transform: rotate(45deg);
}
#show-bottom-add i{
	font-size: 26px;
}
/*.toolbar-bottom .btn,
.toolbar-bottom-apps .btn{
    border:none;
    border-right: 1px solid #bcbcbc;
    background-color: white;
    border-radius: 0px;
    float: left;
    font-size: 12px;
    padding: 10px;
}*/

/*.toolbar-bottom-adds .btn, 
.toolbar-bottom-quickaccess .btn 
{
	border: none;
	background-color: transparent;
	border-radius: 0px;
	font-size: 13px;
	padding-left: 15px;
	width:100%;
	text-align: left;
	font-weight: bold;
}*/


.toolbar-bottom-apps .btn{
    padding: 15px;
}

.toolbar-bottom .btn:hover,
.toolbar-bottom-apps .btn:hover,
.toolbar-bottom-adds .btn:hover,
.toolbar-bottom-quickaccess .btn:hover
{    
    /*background-color: #ddd !important;*/
    -webkit-box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);
}


.toolbar-bottom-apps{
    position: fixed;
    bottom: 37px;
	right: -1px;
	height: 49px;
    border-top: 1px solid #bcbcbc;
    border-bottom: 1px solid #bcbcbc;
    border-left: 1px solid #bcbcbc;
    background-color: #FFF;
    border-radius: 0px 0 0 0;
    text-align: right;
    padding: 0px;
}

.toolbar-bottom-fullwidth{
       position: fixed;
    bottom: 60px;
    right: 10px;
    /* height: 440px; */
    /* border-top: 1px solid #bcbcbc; */
    /* border-bottom: 1px solid #bcbcbc; */
    /* border-left: 1px solid #bcbcbc; */
    /* background-color: #FFF; */
    border-radius: 0px 0 0 0;
    text-align: right;
    padding-top: 10px;
    width: 160px;
    z-index: 10000000;
    /* width: 425px; */
   /* position: fixed;
	bottom: 37px;
	right: 0px;
	height: 440px;
	border-top: 1px solid #bcbcbc;
	border-bottom: 1px solid #bcbcbc;
	border-left: 1px solid #bcbcbc;
	background-color: #FFF;
	border-radius: 0px 0 0 0;
	text-align: left;
	padding-top: 10px;
	width: 425px;*/
}






@media screen and (max-width: 1024px) {
    /*.menu-name-profil small{
        max-width: 45px;
    }
*/

    
}

@media screen and (max-width: 992px) {
    .name .pastille{
        margin-top: -25px;
        max-width: 73%;
        font-size: 0.4em;
    }

    #modal-preview-coop{
        left:15%;
        right:0%;
    }
} 

@media (max-width: 767px) {

    .toolbar-bottom.bottom-right{
        right: 0px;
    }
    #show-bottom-add, #donation-btn{
        border-radius: 100%;
        width: 30px;
        border: none;
        height: 30px;
        border-radius: 10px 0 0 0;
    }
    #show-bottom-add.opened{
        transform: rotate(0deg);
    }
    #show-bottom-add.opened i{
        transform: rotate(45deg);
    }
    #donation-btn{
        display: none;
    }
    #show-bottom-add i{
        font-size: 19px;
        padding-top: 2px;
    }
    .toolbar-bottom {
        position: fixed;
        bottom: 0px;
        height: 30px;
    }

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
					<a target='_blank' href="<?php echo Yii::app()->createUrl("/co2#@coeurnum.view.directory.dir.members")?>" class="btn bold" style="background-color: #E5344D; color:white;">Découvrez Coeur Num</a>
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
				<h1 class="text-center">moi aussi <br/>j'en suis</h1>
				<div class=" padding-20 Ltxt">
				Je fais parti de la filière numérique,  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<div class="text-center margin-top-20">
					<a href="javascript:;" data-form-type="organizations" class="btn-open-form btn btn-primary">Je suis Acteurs de la filière</a>
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
					<a href="javascript:;"  data-form-type="organizations" class="btn-open-form btn btn-primary">Ajoutez Moi dans l'image</a>
				</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 shadow2 padding-20 margin-20">
		    <div class="card col-xs-12 col-md-3">
		          <h4 class="bold text-dark text-center padding-5">
		              <i class="margin-5 fa fa-group"></i> ORGANISATIONS
		              <br><span style="font-size: 1.8em"><?php echo count($organizations) ?></span>
		          </h4> 
		    </div>
		    <div class="card col-xs-12 col-md-3">
		          <h4 class="bold text-dark text-center padding-5">
		              <i class="margin-5 fa fa-calendar"></i> EVENTS
		              <br><span style="font-size: 1.8em"><?php echo count($events) ?></span>
		          </h4> 
		    </div>
		    <div class="card col-xs-12 col-md-3">
		          <h4 class="bold text-dark text-center padding-5">
		              <i class="margin-5 fa fa-lightbulb-o"></i> PROJECTS
		              <br><span style="font-size: 1.8em"><?php echo count($projects) ?></span>
		          </h4> 
		    </div>
		    <div class="card col-xs-12 col-md-3">
		          <h4 class="bold text-dark text-center padding-5">
		              <i class="margin-5 fa fa-user"></i> PEOPLE
		              <br><span style="font-size: 1.8em"><?php echo count($persons) ?></span>
		          </h4> 
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
					<a href="javascript:;"  data-form-type="projects" class="btn-open-form btn bold" style="background-color: #E5344D; color:white;">Ajoutez un projet</a>
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
					<a href="javascript:;"  data-form-type="event" class="btn-open-form btn btn-primary">Ajoutez Mon evennement</a>
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

  <div class="col-xs-offset-1 col-xs-10 shadow2 padding-20 margin-top-20">
    <h3 class="text-center ">PARTICIPER </h3>
    <style type="text/css">
    	.card-body {border: 2px solid #aaa; border-radius: 10px;min-height:200px;}
    	.card{margin-bottom: 10px;	}
    	.card-title{border-bottom:1px solid white;}
    </style>
    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15">
          <h4 class="card-title bold text-dark text-center padding-5">
              <i class="margin-5 fa fa-group fa-2x"></i><br/>
              <a href="<?php echo Yii::app()->createUrl("/co2#search?types=organizations&tags=numerique")?>" class="btn btn-primary"><i class="fa fa-plus"></i> ORGANISATIONS</a>
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Entreprise, Association, Ecole, Centre de Formation  
          </span>

      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15">
          <h4 class="card-title bold text-dark text-center padding-5">
              <i class="margin-5 fa fa-lightbulb-o fa-2x"></i><br/>
              <a href="<?php echo Yii::app()->createUrl("/co2#search?types=projects&tags=numerique")?>" class="btn btn-primary"><i class="fa fa-plus"></i> PROJETS</a>
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Ajoutez vos projets pour augmenter leur visibilité
          </span>
      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15">
          <h4 class="card-title bold text-dark text-center padding-5">
              <i class="margin-5 fa fa-calendar fa-2x"></i><br/>
              <a href="<?php echo Yii::app()->createUrl("/co2#agenda?tags=numerique")?>" class="btn btn-primary"><i class="fa fa-plus"></i> ÉVENNEMENTS </a>
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Partagez vos évennements avec toute la filière 
          </span>
      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15">
          <h4 class="card-title bold text-dark text-center padding-5">
              <i class="margin-5 fa fa-cubes fa-2x"></i><br/>
              <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> RESSOURCES</a>
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Partagez vos ressources et découvrez celle de vos confrères
          </span>

      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15">
          <h4 class="card-title bold text-dark text-center padding-5">
              <i class="margin-5 fa fa-briefcase fa-2x"></i><br/>
              <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> OFFRE D'EMPLOI</a>
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Partagez vos offres d'emplois et donnez leur de la visibilité
          </span>

      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15">
          <h4 class="card-title bold text-dark text-center padding-5">
              <i class="margin-5 fa fa-rss fa-2x"></i><br/>
              <a href="<?php echo Yii::app()->createUrl("/co2#live?tags=numerique")?>" class="btn btn-primary"><i class="fa fa-plus"></i> ACTUALITÉS</a>
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Vos nouveautés, des idées, un partage, de la veille
          </span>

      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15">
          <h4 class="card-title bold text-dark text-center padding-5">
              <i class="margin-5 fa fa-map-marker fa-2x"></i><br/>
              <a href="<?php echo Yii::app()->createUrl("/co2#live?tags=numerique")?>" class="btn btn-primary"><i class="fa fa-plus"></i> INTÉRETS</a>
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding ">
          Vos nouveautés, des idées, un partage, de la veille
          </span>

      </div>
    </div>

    <div class="card col-xs-12 col-md-3">
        <div class="card-body padding-15">
          <h4 class="card-title bold text-dark text-center padding-5">
              <i class="margin-5 fa fa-heart fa-2x"></i><br/>
              <a href="<?php echo Yii::app()->createUrl("/co2#?tags=numerique")?>" class="btn btn-primary"><i class="fa fa-plus"></i> ÉCOSYSTÈME</a>
          </h4> 
          <span class="card-text text-center col-xs-12 no-padding">
          Horizontale, transparent, participatif et interactif 
          </span>
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
- add the plus btn<br/>
  orga <br/>
  projet <br/>
  ressource<br/>
  point de contact <br/>
  j'ai envie de mimpliquer dans le COEUR<br/>
  formualire de proposition <br/>
- <b>people section by role</b> 
	- qui sommes Nous ? <br/>
	- ils nous soutiennent <br/>
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

amelioration <br/>
- <b>navigateur de filière</b> d3js<br/>
	menu liste des orgas, projet ou events <br/>
	on click montre les liens rattachés <br/>
- ajout proposition in dynform popin
  </div>



<div class="toolbar-bottom bottom-right font-montserrat">    

    <?php if(@Yii::app()->session["userId"]) { ?>
    <button class="btn btn-default bg-green-k text-white no-padding" id="show-bottom-add">
        <i class="fa fa-plus-circle"></i> 
    </button>
    <?php } ?>
</div>

<div class="toolbar-bottom-adds toolbar-bottom-fullwidth ">
    <h3 class="col-xs-12"><small class="letter-green" id="addFootTitle">
        <i class="fa fa-plus-circle"></i> Participer : </small>
    </h3>
    <hr class="col-xs-12 margin-bottom-5 margin-top-5">
    <a href="#element.invite" class="addBtnFoot btn-open-form btn btn-default bg-yellow lbhp margin-bottom-10"> 
        <i class="fa fa-user"></i> 
        <span><?php echo Yii::t("common","Invite someone") ?></span>
    </a><br/>
    <a href="javascript:;" data-form-type="organization" class="addBtnFoot btn-open-form btn btn-default bg-green inline-block margin-bottom-10"> 
        <i class="fa <?php echo Organization::ICON; ?>"></i> 
        <span><?php echo Yii::t("common","Organizations") ?></span>
    </a><br/>
    <a href="javascript:;" data-form-type="project" class="addBtnFoot addBtnFoot_orga addBtnFoot_project btn-open-form btn btn-default bg-purple inline-block margin-bottom-10"> 
        <i class="fa <?php echo  Project::ICON;?>"></i> 
        <span><?php echo Yii::t("common","Project") ?></span>
    </a><br/>
    <a href="javascript:;" data-form-type="event" class="addBtnFoot addBtnAll btn-open-form btn btn-default bg-orange margin-bottom-10"> 
        <i class="fa fa-calendar"></i> 
        <span><?php echo Yii::t("common","Event") ?></span>
    </a><br/>
    <a href="javascript:;" data-form-type="classifieds" class="addBtnFoot  addBtnFoot_orga addBtnFoot_project btn-open-form btn btn-default bg-azure margin-bottom-10"> 
        <i class="fa fa-bullhorn"></i> 
        <span><?php echo Yii::t("common","Classified") ?></span>
    </a><br/>
    <a href="javascript:;" data-form-type="ressources" class="addBtnFoot addBtnAll btn-open-form btn btn-default bg-vine margin-bottom-10"> 
        <i class="fa fa-cubes"></i> 
        <span><?php echo Yii::t("common","Ressource") ?></span>
    </a><br/>
    <a href="javascript:;" data-form-type="jobs" class="addBtnFoot hideBtnFoot_person addBtnFoot_orga addBtnFoot_project btn-open-form btn btn-default bg-yellow-k margin-bottom-10"> 
        <i class="fa fa-briefcase"></i> 
        <span><?php echo Yii::t("common","Jobs") ?></span>
    </a><br/>
    <a href="javascript:;" data-form-type="poi" class="addBtnFoot addBtnAll btn-open-form btn btn-default bg-green-k margin-bottom-10"> 
        <i class="fa fa-map-marker"></i> 
        <span><?php echo Yii::t("common","Point of interest") ?></span>
    </a>
    
</div>

<script type="text/javascript">
var contextData = {
  "name": "Coeur Numerique",
  "type": "organizations",
  "slug": "coeurnum",
  "typeSig": "organizations",
  "id": "5718de0ec95229b3a3a72890"
};
var networkJson = {
	add : {
		"organization" : {}, 
		"project"  : {}, 
		"event" : {}
	},
	//dynForm : { extra : ["Numerique", "Hebergeur", "Développeur", "Graphiste", "SysAdmin", "Community Manager" ] }, 
	request : {
		mainTag : "numerique",
		parent : {
			id: "5718de0ec95229b3a3a72890",
			type : "organizations"
		},
		sourceKey : ["coeurnum"],
		searchTag : ["Numerique", "Hebergeur", "Développeur", "Graphiste", "SysAdmin", "Community Manager" ]
	}
};
jQuery(document).ready(function() {
    
  	
   
    $(".toolbar-bottom-adds").hide().removeClass("hidden");
    $('#show-bottom-add').off().click(function(){
        if(!$(this).hasClass("opened")){
            $(this).addClass("opened");
            $(".toolbar-bottom-apps").hide(200);
            $(".toolbar-bottom-adds").toggle(100);
            $('.toolbar-bottom-adds .btn').click(function(){
                $(".toolbar-bottom-adds").hide(200);
                $(this).removeClass("opened");
            });
        }else{
            $(".toolbar-bottom-adds").hide(200);
            $(this).removeClass("opened");
        }
    });
    $('.toolbar-bottom-adds').unbind("mouseleave").mouseleave(function(){
        console.log(".toolbar-bottom-adds mouseleave");
        $('#show-bottom-add').removeClass("opened");
        $(".toolbar-bottom-adds").hide(200);

    });

    $(".btn-open-form").click(function(){
  		dyFObj.openForm($(this).data("form-type"),"sub");
  	});

})


</script>


