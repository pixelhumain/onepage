<style></style>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header pull-left">  
           
            <span class="hidden-xs skills font-montserrat"><?php echo Yii::t("common",$mainTitle); ?></span>

            <div class="dropdown inline-block">
                <button class="btn btn-link no-padding text-white btn font-blackoutM dropdown-toggle" 
                        data-toggle="dropdown" id="btn-onepage-main-menu">
                        <img src="<?php echo @$element["profilThumbImageUrl"]; ?>" 
                             class="logo-menutop pull-left shadow" height=50>
                </button>
                <!-- <div class="dropdown-onepage-main-menu font-montserrat" aria-labelledby="btn-onepage-main-menu">
                    <ul class="dropdown-menu arrow_box" id="menu-onepage"></ul>
                </div> -->
            </div>


            <a href="<?php echo Yii::app()->getRequest()->getBaseUrl(true)."/".
                                $this->module->id."/co/index/slug/".@$element["slug"]; ?>" 
                class="btn btn-link btn-mainmenu-onepage">
                <i class="fa fa-home"></i> Accueil 
            </a>
            <a href="<?php echo Yii::app()->getRequest()->getBaseUrl(true)."/".
                                $this->module->id."/co/blog/slug/".@$element["slug"]; ?>" 
                class="btn btn-link btn-mainmenu-onepage">
                <i class="fa fa-newspaper-o"></i> Actualité 
            </a>
            <a href="<?php echo Yii::app()->getRequest()->getBaseUrl(true)."/".
                                $this->module->id."/co/contact/slug/".@$element["slug"]; ?>" 
                class="btn btn-link btn-mainmenu-onepage">
                <i class="fa fa-newspaper-o"></i> Contact 
            </a><!-- 
            <a href="<?php echo Yii::app()->getRequest()->getBaseUrl(true)."/".
                                $this->module->id."/co/gallery/slug/".@$element["slug"]; ?>" 
                class="btn btn-link btn-mainmenu-onepage">
                <i class="fa fa-newspaper-o"></i> Photos 
            </a>
            <a href="<?php echo Yii::app()->getRequest()->getBaseUrl(true)."/".
                                $this->module->id."/co/classified/slug/".@$element["slug"]; ?>" 
                class="btn btn-link btn-mainmenu-onepage">
                <i class="fa fa-newspaper-o"></i> Annonces 
            </a>
            <a href="<?php echo Yii::app()->getRequest()->getBaseUrl(true)."/".
                                $this->module->id."/co/agenda/slug/".@$element["slug"]; ?>" 
                class="btn btn-link btn-mainmenu-onepage">
                <i class="fa fa-newspaper-o"></i> Agenda 
            </a> -->

        </div>

        <button class="btn-show-map" title="<?php echo Yii::t("common", "Show the map"); ?>"
                alt="<?php echo Yii::t("common", "Show the map"); ?>"
                >
            <i class="fa fa-map-marker"></i>
        </button> 


        <div class="navbar-header pull-right margin-top-5">  
            <?php if($edit==true){ ?>


                <a href="<?php echo Yii::app()->getRequest()->getBaseUrl(true)."/".
                                    $this->module->id."/co/index/slug/".@$element["slug"]."/noEdit/true"; ?>" 

                    target=_blank data-original-title="Visualiser comme un visiteur" data-placement="bottom"
                    class="btn btn-link text-dark btn-onepage-quickview tooltips">
                    <small><i class="fa fa-eye"></i> visiter</small>
                </a>
                <a href="" 
                   data-original-title="Paramétrer votre site web" data-placement="bottom"
                    class="btn btn-link text-dark btn-onepage-quickview tooltips">
                    <small><i class="fa fa-cogs"></i> Paramètres</small>
                </a>
            <?php }else if(@$noEdit==true){ ?>
                <a href="<?php echo Yii::app()->getRequest()->getBaseUrl(true)."/".
                                    $this->module->id."/co/index/slug/".@$element["slug"]; ?>" 
                    class="btn btn-link letter-blue btn-onepage-quickview">
                    <small><i class="fa fa-pencil"></i> Activer l'edition</small>
                </a>
            <?php } ?>


            <div class="dropdown inline-block">
                <a href="#" class="dropdown-toggle btn btn-default btn-language padding-5" data-toggle="dropdown" role="button">
                <img src="<?php echo Yii::app()->getRequest()->getBaseUrl(true); ?>/images/flags/<?php echo Yii::app()->language ?>.png" width="22"/> 
                <span class="caret text-dark"></span>
                </a>
                <ul class="dropdown-menu arrow_box lang" role="menu" style="">
                    <li><a href="javascript:;" onclick="setLanguage('en')"><img src="<?php echo Yii::app()->getRequest()->getBaseUrl(true); ?>/images/flags/en.png" width="25"/> <?php echo Yii::t("common","English") ?></a></li>
                    <li><a href="javascript:;" onclick="setLanguage('fr')"><img src="<?php echo Yii::app()->getRequest()->getBaseUrl(true); ?>/images/flags/fr.png" width="25"/> <?php echo Yii::t("common","French") ?></a></li>
                    <li><a href="javascript:;" onclick="setLanguage('de')"><img src="<?php echo Yii::app()->getRequest()->getBaseUrl(true); ?>/images/flags/de.png" width="25"/> <?php echo Yii::t("common","German") ?></a></li>
                </ul>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
</nav>

<div class="dropdown-onepage-main-menu font-montserrat" aria-labelledby="btn-onepage-main-menu">
    <ul class="dropdown-menu arrow_box" id="menu-onepage">
        <li><a href="javascript:" data-target="#header"><i class="fa fa-angle-right"></i> <span class="labl">Accueil</span></a></li>
    </ul>
</div>


<script type="text/javascript">
    jQuery(document).ready(function() { 
    });
</script>