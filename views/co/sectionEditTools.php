

<style></style>

<div class="hidden-xs shadow-left" id="onepage-edition-tools">

	<div class="col-md-12 col-sm-12 no-padding" id="static-head-tools">
    	<h5 class="pull-left"><i class="fa fa-angle-down"></i> <i class="fa fa-cogs"></i> Editer la section</h5>
    	<button class="btn btn-danger pull-right margin-left-5 btn-close-edition-tools" style="padding: 9px;"><i class="fa fa-times"></i></button>
    	<button class="btn btn-success pull-right btn-save-edition-tools"><i class="fa fa-save"></i> Enregistrer</button>
    </div>

	<div class="col-md-12 col-sm-12 no-padding margin-bottom-10">
		<i class="fa fa-pencil letter-blue"></i> <input type="text" class="margin-top-5 edit-section-title font-montserrat">
		<hr class="margin-bottom-5 margin-top-5">
	</div>

    <div class="col-md-12 col-sm-12 no-padding">
    	<div class="col-md-12 col-sm-12 no-padding">
	    	<button class="btn btn-default padding-20 pull-left" id="btn-txtcolor-section"></button> 
	    	<h4 class="pull-left margin-left-10"><i class="fa fa-angle-down"></i> Couleur du text</h4>
	    	<div class="col-md-12 col-sm-12 no-padding margin-top-15">
	   			<button class="btn btn-default padding-20 btn-txtcolor-section bg-white col-md-6 col-sm-6 bg-white" data-type="light"></button>
	    		<button class="btn btn-default padding-20 btn-txtcolor-section bg-dark col-md-6 col-sm-6" data-type="dark"></button>

    			<input type="text" id="text-color" class="pull-right margin-top-10">
	    	</div>
	    </div>
	    <br><hr>
    </div>	

    <div class="col-md-12 col-sm-12 no-padding margin-top-15">
	    <div class="col-md-12 col-sm-12 no-padding">
	    	<button class="btn btn-default padding-20 pull-left" id="btn-bgcolor-section"></button> 
	    	<h4 class="pull-left margin-left-10"><i class="fa fa-angle-down"></i> Couleur de fond</h4>
	    	<button class="btn btn-default padding-20 btn-bgcolor-section bg-white pull-right bg-white" data-hex="FFF"></button>
	    	<button class="btn btn-default padding-20 btn-bgcolor-section bg-dark  pull-right" data-hex="333"></button>
	    </div>	
	    <div class="col-md-12 col-sm-12 no-padding margin-top-10">
	   		<?php $class="left";
	    		  foreach (Onepage::$colorSection as $i => $hex) {
	    	?>
	    		<?php if($i%2!=1 && $i>0) echo "</div>"; ?>
	    		<?php if($i%2!=1) echo "<div class='col-md-3 col-sm-3 no-padding'>"; ?>
	    			<button class="btn btn-default padding-20 btn-bgcolor-section col-md-6 col-sm-6 no-padding" 
	    					data-hex="<?php echo $hex; ?>" 
	    					style="background-color:#<?php echo $hex; ?>;">
	    			</button>		    		
	    	<?php } ?>

    		<input type="text" id="background-color" class="pull-right margin-top-10">
    	</div>

    	<br><hr>
    </div>
    
    <div class="col-md-12 col-sm-12 no-padding margin-top-15">
	    <div class="col-md-12 col-sm-12 no-padding">
	    	<h4 class="pull-left margin-left-10"><i class="fa fa-angle-down"></i> Image de fond</h4>
	    </div>	
	    <?php foreach (Onepage::$imgSections as $i => $sec) { ?>	    
		    <div class="col-md-12 col-sm-12 no-padding margin-top-10">
		    	<h5><?php echo $sec["title"]; ?></h5>
			   	<?php 
			   		$path = $sec["folder"]."/";
			   		$path = ".".substr(Yii::app()->theme->baseUrl.'/assets/img/background-onepage/'.$path, 3);
			   		if(file_exists ( $path )){
			          $files = glob($path.'*.{jpg,jpeg,png}', GLOB_BRACE);
			        }
			    ?>
		    	<?php
		    		 if(isset($files))
		    		 foreach ($files as $i => $img) { 
		    		 $dataUrl = explode( "/", $img); //var_dump($dataUrl);
		    		 $dataUrl = $dataUrl[6] . "/" . $dataUrl[7];
		    		 //var_dump($dataUrl);
		    	?>
		    			<button class="btn btn-default col-md-4 col-sm-4 btn-bgimg-section padding-5"
		    			data-repeat="<?php echo $sec["repeat"] ? "true" : "false"; ?>"
		    			data-url="<?php echo $dataUrl; ?>"
    					style="background-image:url('<?php echo $img; ?>'); 
    					 <?php if($sec["repeat"]) echo "background-repeat:repeat;"; 
    					 	   else echo "background-size: cover;"; 
    					 ?>"
		    					>
		    			</button>
		    	<?php } ?>
	    	</div>
		<?php } ?>
    	<input type="text" id="background-img" class="pull-right margin-top-10">
    	<br><hr>
    </div>    
</div>

<!-- 
<div class="scroll-top page-scroll">
<a class="btn btn-primary" href="#page-top">
    <i class="fa fa-chevron-up"></i>
</a>
</div> -->

<script type="text/javascript" >
var typeEl = "<?php echo $type; ?>";
var idEl = "<?php echo $id; ?>";
var currentIdSection = "";

jQuery(document).ready(function() { 
			
});


</script>