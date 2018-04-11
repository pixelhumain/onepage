<style>
    a.link-submenu-header{
        /*background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;*/
        padding: 11px 10px;
        font-size: 12px;
        font-weight: bold;
    }
    a.link-submenu-header.active, 
    a.link-submenu-header:hover, 
    a.link-submenu-header:active{  
        border-bottom: 2px solid #ea4335;
        /*background-color: rgba(255, 255, 255, 1);*/
        color:#ea4335 !important;
        text-decoration: none;
    }

    .dropdown-menu.arrow_box{
        position: absolute !important;
        top: 80px;
        left: inherit;
        background-color: white;
        border: 1px solid transparent;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
    }

    .btn-language{
        height: 35px;
        border-radius: 0% 50%;
        width: 50px;
    }


    .btn-star-fav {
        font-size: 18px;
        margin-top: 5px;
    }

    .menu-name-profil{
        margin-left:10px;
    }

    .navbar-nav .menu-button{
        width: 45px !important;
        margin-right: 0px;
        height: 30px;
        margin-top: 10px;
        font-size: 18px !important;
        padding:5px;
        position: relative;
    }
    .navbar-nav .menu-button:hover{
        color:grey !important;
    }

    #mainNav {
        background: rgba(255, 255, 255, 0) !important;
        box-shadow: none;
    }
    .main-container{
        padding-top: 0px!important;
    }
    .navbar-header .logo-menutop{
        margin: 3px 5px 0 -5px;
        border-radius: 3px;
    }

    .navbar-custom{
        padding:8px;
    }

    #mainNav .container, 
    .navbar-map .container{
        padding: 0px;
    }
    .navbar-header .logo-menutop{
        margin:0px;
    }

    .btn-language{
        border-radius: 0px!important;
        background: rgba(0,0,0,0);
        border: none;
        color: white !important;
        margin-top: 5px;
        margin-right: 15px;
    }
    .btn-language:hover,
    .btn-language:active{
        background: rgba(0,0,0,0);
    }

    .btn-show-map{
        border-radius: 100% !important;
        width: 40px!important;
        border: none!important;
        height: 40px!important;
        margin-right:5px!important;
    }
    .btn-show-map:hover {
        background-color: white!important;
        color: #0095FF!important;
        border: 2px solid #0095FF!important;
    }

    .navbar-map .btn-show-map{
        margin-right: 15px !important;
        font-size: 16px;
        margin-top:2px;
    }

    .navbar-map .menu-name-profil,
    #menu-map-btn-start-search,
    #input-search-map{
        display: none;
    }

    .navbar-map .navbar-header{
        display: none;
    }

    .dropdown-menu.arrow_box.lang{
        top: 55px;
    }

</style>
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
                             class="logo-menutop pull-left shadow" height=60>
                </button>
                <div class="dropdown-onepage-main-menu font-montserrat" aria-labelledby="btn-onepage-main-menu">
                    <ul class="dropdown-menu arrow_box" id="menu-onepage"></ul>
                </div>
            </div>

            <div class="dropdown inline-block">
                <a href="#" class="dropdown-toggle btn btn-default btn-language padding-5" data-toggle="dropdown" role="button">
                <img src="<?php echo Yii::app()->getRequest()->getBaseUrl(true); ?>/images/flags/<?php echo Yii::app()->language ?>.png" width="22"/> <span class="caret"></span></a>
                <ul class="dropdown-menu arrow_box lang" role="menu" style="">
                    <li><a href="javascript:;" onclick="setLanguage('en')"><img src="<?php echo Yii::app()->getRequest()->getBaseUrl(true); ?>/images/flags/en.png" width="25"/> <?php echo Yii::t("common","English") ?></a></li>
                    <li><a href="javascript:;" onclick="setLanguage('fr')"><img src="<?php echo Yii::app()->getRequest()->getBaseUrl(true); ?>/images/flags/fr.png" width="25"/> <?php echo Yii::t("common","French") ?></a></li>
                    <li><a href="javascript:;" onclick="setLanguage('de')"><img src="<?php echo Yii::app()->getRequest()->getBaseUrl(true); ?>/images/flags/de.png" width="25"/> <?php echo Yii::t("common","German") ?></a></li>
                </ul>
            </div>

            <?php if($edit==true){ ?>
                <a href="<?php echo $hashOnepage.".mode.noedit"; ?>" target=_blank
                    data-original-title="Visualiser comme un visiteur" data-placement="right"
                    class="btn btn-link bg-red letter-white font-blackoutM btn-onepage-quickview tooltips">
                    <i class="fa fa-eye"></i> visualiser
                </a>
            <?php }else if(@$_GET["mode"]=="noedit"){ ?>
                <a href="<?php echo $hash.".".$themeParams["onepageKey"][0]; ?>" 
                    class="btn btn-link bg-red letter-white font-blackoutM btn-onepage-quickview lbh">
                    <i class="fa fa-cogs"></i> Activer l'edition de la page
                </a>
            <?php } ?>
            <?php 
                //$params = CO2::getThemeParams();  
                /*$icon = "";
                // echo "params : "; var_dump($params);// exit; 
                foreach ($params["pages"] as $key => $value) {
                    if($subdomain==@$value["subdomain"]) {
                        $icon = @$value["icon"];
                    } 
                }
            <!--<i class="fa fa-<?php echo $icon; ?> hidden-top margin-top-15 margin-right-5 margin-left-10 pull-left text-red" 
                style="font-size:20px;"></i>-->
                */
            ?>
        </div>

        <button class="btn-show-map" title="<?php echo Yii::t("common", "Show the map"); ?>"
                alt="<?php echo Yii::t("common", "Show the map"); ?>"
                >
            <i class="fa fa-map-marker"></i>
        </button>
        <?php //if( !@Yii::app()->session['userId'] ){ ?>
            
        <?php //} ?>
        
      
    </div>
    <!-- /.container-fluid -->
</nav>




<script type="text/javascript">
 
    jQuery(document).ready(function() {   
        $(".logo-menutop.hidden-top").show();
    });

</script>