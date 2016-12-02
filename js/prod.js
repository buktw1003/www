$(function() {
    var thumbsPerPage = 5;
    var $imgShow = $(".image-show");
    var $img = $("img", $imgShow);
    function imgRearrange(){
        $imgShow.each(function() {
            //var this  
            var that = $(this);
            var $arrowBtn = $(".arrow a", that);
            var totalPics = that.find(".slides-nav li").length;
            var $ul = $(".img", that);
            var $li = $(".slide-img li", that);
            var liWidth = $li.width();
            var liPaddingRight = parseInt($li.css("paddingRight"));
            var liTotalWidth = Math.ceil(liWidth + liPaddingRight);
            var ulWidth = liTotalWidth * totalPics;
            var totalPages = parseInt(totalPics / thumbsPerPage);
            currentPage = 1;
            var pos = -(liTotalWidth);
            $li.each(function() {
                pos += liTotalWidth;
                $(this).css({ "left": (pos) });
            });
            if (totalPics <= thumbsPerPage) {
                $arrowBtn.addClass("inactive");
            }
        });
    };
    $(window).on("resize scroll",imgRearrange).resize();

    $(".slide-prev").addClass("inactive");
    $(".arrow a", $imgShow).click(function() {
        if (!$(this).hasClass("inactive")) {
            var that = $(this);
            var thisDirection = that.attr("class").substr(6, 4);
            var thisParent = that.parents(".image-show");
            var $ul = $(".img", thisParent);
            var $li = $(".slide-img li", thisParent);
            var totalPics = $li.length;
            var liTotalWidth = Math.ceil($li.width() + parseInt($li.css("paddingRight")));
            var totalPages = parseInt(totalPics / thumbsPerPage);
            var allThumbsWidth = liTotalWidth * totalPics;
            var maxLeftPos = -(allThumbsWidth - liTotalWidth * thumbsPerPage);
            var movingPos = liTotalWidth * thumbsPerPage;
            var currentPos = parseInt($ul.css("left"));
            switch (thisDirection) {
                case "next":
                    slideNext(that, $ul, movingPos, maxLeftPos, currentPos);
                    break;
                case "prev":
                    slidePrev(that, $ul, movingPos, currentPos);
                    break;
            }
        }
    })
    function slideNext(that, $ul, movingPos, maxLeftPos, currentPos) {
        var leftPos = currentPos - movingPos;
        if (leftPos < maxLeftPos) {
            leftPos = maxLeftPos;
        }
        $ul.filter(":not(:animated)").animate({ "left": leftPos }, function() {
            currentPage++;
            if (leftPos == maxLeftPos) {
                that.addClass("inactive");
            }
            $(".arrow a").not(that).removeClass("inactive");
        });
    };
    function slidePrev(that, $ul, movingPos, currentPos) {
        var leftPos = currentPos + movingPos;
        if (leftPos > 0) {
            leftPos = 0;
        };
        $ul.filter(":not(:animated)").animate({ "left": leftPos }, function() {
            currentPage++;
            if (leftPos == 0) {
                that.addClass("inactive");
            }
            $(".arrow a").not(that).removeClass("inactive");
        });
    };
    $img.click(function() {
        var thisParent = $(this).parents(".image-show");
        var $mainImg = $(".slides img",thisParent);
        var thisSrc = $(this).attr("src");
        $mainImg.attr("src", thisSrc);
    });
    var $tablist = $(".tablist a");
    var $tabContent = $(".tabs .tab-content");
    $tablist.click(function() {
        //var currentTop = $(window).scrollTop();
        var that = $(this);
        var thisIndex = that.parent().index();
        $tablist.removeClass("active");
        that.addClass("active");
        $tabContent.removeClass("active");
        $tabContent.filter(":eq(" + thisIndex + ")").addClass("active");
        $("body","html").animate({"scrollTop" : $tablist.offset().top-130});
    });
    $tablist.filter(":eq(0)").addClass("active");
    $tabContent.filter(":eq(0)").addClass("active");
    //$("")
});
