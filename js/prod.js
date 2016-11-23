$(function() {
    function prodMainImage() {
        var thumbsPerPage = 5;
        var $imgShow = $(".image-show");
        $imgShow.each(function() {
            var that = $(this);
            totalPics = that.find(".slides-nav li").length;
            $arrowBtn = $(".arrow a", that);
            $thumb = $(".img li a",that);
            $ul = $(".img", that);
            var $li = $(".slide-img li", that);
            var liWidth = $li.width();
            var liPaddingRight = parseInt($li.css("paddingRight"));
            liTotalWidth = Math.ceil(liWidth + liPaddingRight);
            var ulWidth = liTotalWidth * totalPics;
            var totalPages = parseInt(totalPics / thumbsPerPage);
            allThumbsWidth = liTotalWidth * totalPics;
            console.log(totalPages)
            currentPage = 1;
            var pos = -(liTotalWidth);
            $li.each(function() {
                pos += liTotalWidth;
                $(this).css({ "left": (pos) })
            });
            console.log("aaa" + liTotalWidth);



        });
        if (totalPics <= thumbsPerPage) {
            $arrowBtn.addClass("inactive");
        }
        $arrowBtn.not(".inactive").click(function(e) {
            var $this = $(this);
            var thisDirection = $this.attr("class").substr(6, 4);
            var currentPos = parseInt($ul.css("left"));
            var movingPos = liTotalWidth * thumbsPerPage;
            var minLeftPos = -(liTotalWidth);
            var maxLeftPos = -(allThumbsWidth - liTotalWidth * thumbsPerPage)
            console.log("bbb" + liTotalWidth);


            switch (thisDirection) {
                case "next":
                    var leftPos = currentPos - movingPos;
                    if (leftPos < maxLeftPos) {
                        leftPos = maxLeftPos
                    }
                    $ul.filter(":not(:animated)").animate({ "left": leftPos }, function() {
                        currentPage++;
                        if (leftPos == maxLeftPos) {
                            $this.addClass("inactive");
                        }
                        $arrowBtn.not($this).removeClass("inactive");

                    });
                    break;
                case "prev":
                    var leftPos = currentPos + movingPos;
                    if (leftPos > 0) {
                        leftPos = 0;
                    }
                    $ul.filter(":not(:animated)").animate({ "left": (leftPos) }, function() {
                        currentPage--;
                        if (leftPos == 0) {
                            $this.addClass("inactive");
                        }
                        $arrowBtn.not($this).removeClass("inactive");
                    });
                    break;
            }
        });
        $thumb.click(function() {
           var thisSrc = $("img",this).attr("src");
        })
    }
    $(window).resize(function() {
        prodMainImage();
    }).resize();
    //$imgShow.find(".")
})
