$(function() {
    $(".slider").each(function() {
    	var that = $(this);
        var $sliderImgUl = $(".img", this);
        var $sliderLi = $("li", $sliderImgUl);
        var $sliderPager = $(".pager", this);
        var sliderNum = $sliderLi.length;
        var defaultZ = 999;
        var currentIndex = 1;
        var imageRatio = 16/9;

        function createPagers() {
            for (pg = 0; pg < sliderNum; pg++) {
                $sliderPager.append("<li id=\"pager" + pg + "\"><a href=\"\"></a></li>");
            }
        }
        createPagers();
        $sliderLi.each(function(){
        	defaultZ--;
        	$(this).css({"zIndex" : defaultZ})
        })
        //init showing the first image
        //var $sliderPager = $(".pager", this);
        $sliderLi.filter(":first-child").filter(":not(:animated)").animate({ "opacity": "1" }).addClass('active');
        $('li',$sliderPager).filter(":first-child").addClass("active")
        function fading() {
        	if(currentIndex>=sliderNum){
        		currentIndex = 0;
        	}
        	var nextIndex = currentIndex+1;
        	
        	$(".img li:nth-child(" + nextIndex + ")",that).filter(":not(:animated)")
        	.animate({"opacity":1},1000,function(){
        		currentIndex++;
        	});
        	var $currentSlider = $sliderLi.filter(".active");
            $currentSlider.not(":animated").animate({ "opacity": 0 }, 1000, function() {
            	$(".active",that).removeClass("active");
            	$(".img li:nth-child(" + currentIndex + ")",that).addClass('active');
            	$(".pager li:nth-child(" + currentIndex + ")",that).addClass('active');
            });
        }
        setInterval(fading,5000);
        $("a",$sliderPager).click(function(e){
        	e.preventDefault();
        	currentIndex = parseInt($(this).parent().attr("id").substr(5));
        	fading();
        })
        //fading();
        //detect current pager
        function detectPager() {

        }
    })
})
