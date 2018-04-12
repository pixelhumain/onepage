
function initOnepageInterface(){

    $('.progressTop').val(40);

    initKInterface({"affixTop":0});

    $(".tooltips").tooltip();
   
    $('.sub-menu-social').affix({
      offset: {
          top: 320
      }
    });

    //create <li> in onepage main menu
    initMenuOnepage();

    //init markdown display
    initMarkdownDescription();

    if(edit==true)
        bindDynFormEditable();

    //console.log("body width", $("body").width());
    if($("body").width()>767)
        $("#btn-onepage-main-menu").trigger("click");

    //activate btn to show all text of Description (max hide by default)
    $(".btn-full-desc").click(function(){
        var sectionKey = $(this).data("sectionkey");
        if($("section#"+sectionKey+" .item-desc").hasClass("fullheight")){
            $("section#"+sectionKey+" .item-desc").removeClass("fullheight");
            $(this).html("<i class='fa fa-plus-circle'></i>");
        }else{
            $("section#"+sectionKey+" .item-desc").addClass("fullheight");
            $(this).html("<i class='fa fa-minus-circle'></i>");
        }
    });

    Sig.showMapElements(Sig.map, mapData);

    $('.progressTop').val(60);
    $(".progressTop").fadeOut(500);

    loadGalleryOnepage();
    loadNewsSectionOnePage();
}


//create <li> in onepage main menu
function initMenuOnepage(){
	$.each($("#onepage section"), function(){
		var id = $(this).attr("id");
		var title = $(this).find("h2.section-title span.sec-title").html();
		if(typeof title != "undefined"){
			$("ul#menu-onepage").append(
			'<li><a href="javascript:" data-target="#'+id+'"><i class="fa fa-angle-right"></i> '+title+'</a></li>');
		}
	});

	//activate clicking
	$(".dropdown-onepage-main-menu li a").click(function(e){
		e.stopPropagation();
		var target = $(this).data("target");
		KScrollTo(target);
	});
}

function initMarkdownDescription() {
	
	var descHtml = "<center><i>"+trad.notSpecified+"</i></center>";

	$.each($(".descriptionMarkdown"), function(){
		var sectionK = $(this).data("key");
		var item = $(this).data("item");
		descHtml = "<center><i>"+trad.notSpecified+"</i></center>";
		
		if($(this).html().length > 0){
			descHtml = dataHelper.markdownToHtml($(this).html()) ;
			//console.log("initMarkdown", descHtml, 
			//			"section#"+sectionK+" .portfolio-item.item-"+item+" .item-desc");
			$("section#"+sectionK+" .portfolio-item.item-"+item+" .item-desc").html(descHtml);
		}
	});
	
}


var loading = 	"<li class='loader shadow2 letter-blue text-center margin-bottom-50' style='width: 60%;margin-left: 20%;'>"+
					"<span style=''>"+
						"<i class='fa fa-spin fa-circle-o-notch'></i> "+
						"<span>"+trad.currentlyloading+" ...</span>" + 
				"</li>";

function loadStreamOnePage(indexMin, indexMax){ mylog.log("LOAD STREAM ONEPAGE"); //loadLiveNow
	loadingData = true;
	currentIndexMin = indexMin;
	currentIndexMax = indexMax;
	
	if(typeof dateLimit == "undefined") dateLimit = 0;

	$("#news-list").append(loading);

	var url = "news/index/type/"+typeItem+"/id/"+contextData.id+"/date/"+dateLimit+"?tpl=co2&nbCol=2&renderPartial=true";
	$.ajax({ 
        type: "POST",
        url: baseUrl+"/"+moduleId+'/'+url,
        data: { indexMin: indexMin, 
        		indexMax:indexMax, 
        		renderPartial:true 
        	},
        success:
            function(data) {
                if(data){ 
                	$("#news-list").find(".loader").remove();
                	$("#news-list").append(data);
				}
				loadingData = false;
				$(".stream-processing").hide();
            },
        error:function(xhr, status, error){
            loadingData = false;
            $("#news-list").html("erreur");
        },
        statusCode:{
                404: function(){
                	loadingData = false;
                    $("#news-list").html("not found");
            }
        }
    });
}


function loadGalleryOnepage(){
    var url = "gallery/index/type/"+elementType+"/id/"+elementId;
    ajaxPost('#gallery-page', baseUrl+'/'+parentModuleName+'/'+url, null, 
        function(){
            $('.progressTop').val(80);
        },"html");
}

function loadNewsSectionOnePage(){

    //load section TIMELINE
    var url = "news/index/type/"+elementType+"/id/"+elementId+"?isFirst=1&";
    ajaxPost('#timeline-page', baseUrl+'/'+parentModuleName+'/'+url+"renderPartial=true&tpl=co2&nbCol=2", null, 
        function(){
            contextData = contextDataOnepage;
            $('.progressTop').val(100);

            $(window).bind("scroll",function(){ 
                if(!loadingData && !scrollEnd){
                      var heightWindow = $("#onepage").height() - $("#mapCanvasBg").height();
                      if( $(this).scrollTop() >= heightWindow - 300){
                        loadStreamOnePage(currentIndexMin+indexStep, currentIndexMax+indexStep);
                      }
                }
            });
        },"html");

}