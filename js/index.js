$(function() {

    $(".cycle").each(function() {
        var that = $(this);
        var $cycleLi = $(">li", that);
        var cycleNum = $cycleLi.length;
        var $introWrap = $(".intro-wrap", that);
        var currentIndex = 0;



        function cycling() {
            if (currentIndex >= cycleNum) {
                currentIndex = 0;
            }
            currentIndex++;
            $introWrap.removeClass("active");
            $("li:nth-child(" + currentIndex + ") .intro-wrap", that).addClass("active");
        }
        var cyclingInterval = null;
        function startInterval(){
        	cyclingInterval = setInterval(cycling, 3000);
        }
        startInterval();
        cycling();
        $introWrap.hover(function(){
        	clearInterval(cyclingInterval)
        	$introWrap.removeClass("active");
        	$(this).addClass("active");
        	var thisIndex = $(this).parents("li").index();
        	currentIndex = thisIndex+1;
        },function(){
        	startInterval();
        });
    });
})
