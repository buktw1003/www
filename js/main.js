$(function() {
    var sitename = document.location.hostname;
    var $body = $("body");
    var $overlay = $(".overlay");
    var $overlayContainer = $(".overlay .overlay-container")
    var $overlayContent = $(".overlay .content");
    var ratioWide = 16 / 9;


    $(window).on("resize scroll", function() {
        windowHeight = $(window).height();
        var $vCenter = $(".v-center");
        var currentTop = $(window).scrollTop();

        function middleCenter() {
            $vCenter.each(function() {
                var $thisParent = $(this).parent();
                var thisHeight = $(this).height() + (parseInt($(this).css("paddingTop")) * 2);
                var outerHeight = $thisParent.height() + parseInt($thisParent.css("paddingTop")) + parseInt($thisParent.css("paddingBottom"));
                //console.log(thisHeight)
                $(this).css({ "top": (outerHeight - thisHeight) / 2 })
            });
        };
        middleCenter();
        $(".overlay .content>*").css({ "maxHeight": windowHeight * 0.9 - ($(".overlay h3").height() + 20) });
        $(".overlay .content>*").css({ "maxHeight": windowHeight * 0.9 - ($(".overlay h3").height() + 20) });

        $overlay.css({ "top": currentTop })
        resizeVideo();
    }).resize();

    function resizeVideo() {
        var $videoIframe = $(".overlay .content iframe");
        $videoIframe.height($overlayContent.width() / ratioWide);
        if ($videoIframe.height() > windowHeight) {
            $videoIframe.height(windowHeight - 100);
        }
        // $overlayContainer.css({ "marginTop": -(($overlayContainer.height() + parseInt($overlayContainer.css("paddingTop")) + parseInt($overlayContainer.css("paddingBottom"))) / 2) });
    }
    var overlayHtml = $(".prod-items-html." + lng).html();
    $overlayContent.html(overlayHtml);

    //show overlay
    var onImgLoad = function(img, callback) {
        $(img).each(function() {
            if (this.complete || /*for IE 10-*/ $(this).height() > 0) {
                callback.apply(this);
                $(this).show(0);
            } else {
                $(this).on('load', function() {
                    callback.apply(this);
                    $(this).show(500);
                });
            }
        });
    };
    $(".btn-sp a").each(function() {
        $(this).click(function(e) {
            e.preventDefault();
            var currentTop = $(window).scrollTop();
            var that = $(this);
            var overlayType = that.attr("type");
            var prodName = $(this).parents(".prod").attr("id");
            var thisIndex = $(this).parent().index() + 1;
            $overlayContainer.addClass(overlayType);
            $body.addClass("overlay-enabled");
            console.log("source");
            switch (overlayType) {
                case "video":
                    var vid = $(this).attr("vid");
                    var thisVid = prodName + vid;

                    var title = $(this).html();
                    overlayHtml = $(this).attr("vidsrc");

                    $overlayContent.html(overlayHtml);

                    break;
                case "item":
                    var title = $(".title", that).html();
                    $("#ov-item" + thisIndex).addClass("active");
                    break;
                case "gallery":
                    var imgSrc = that.find("img").attr("src");
                    var title = 'Gallery';
                    var path = imgSrc.replace('gallery/s/', 'gallery/');
                    overlayHtml = '<img src="' + path + '" />';
                    $overlayContent.html(overlayHtml);

                    var $imgBeingLoaded = $('.overlay .content img')
                    $imgBeingLoaded.hide();
                    onImgLoad($imgBeingLoaded, function() {
                        //set image appear size
                        $(".overlay img").css({ "maxHeight": windowHeight * 0.9 - ($(".overlay h3").height() + 20) });
                        $(".overlay img").css({ "maxHeight": windowHeight * 0.9 - ($(".overlay h3").height() + 20) });
                    });


            }
            //$overlayContent.html(overlayHtml);
            //imgRearrange();

            $(window).scrollTop(currentTop - 1);
            var currentTop = $(window).scrollTop();
            $(window).scrollTop(currentTop + 1);



            $("h3", $overlay).html(title + " - " + prodName)
                // setTimeout(resizeVideo, 500);
                // setTimeout(resizeVideo, 1000);
            $overlay.css({ "display": "table" }).fadeTo("fast", "100", function() {


            });
            $overlayContainer.css({ "display": "inline-block" });
            $overlayContent.scrollTop(0);
        });
    });
    $overlayContainer.click(function(e) {
        e.stopPropagation();
    });
    $(".btn-close").click(function(e) {
        e.preventDefault();
        closeOverlay();
        $overlayContainer.removeClass("item");
        $body.removeClass("overlay-enabled");
    });

    function closeOverlay() {
        $overlay.fadeTo("fast", "0", function() {
            $overlay.css({ "display": "none" });
            $overlayContainer.css({ "display": "none" });
            $overlayContent.find(">div").removeClass("active");
            //$overlayContent.html("");
            $body.removeClass("overlay-enabled");
        });
    };
    $overlay.click(closeOverlay)

});
