
$(function() {
    console.log("aaa" + lng)
    var sitename = document.location.hostname;
    var $body = $("body");
    var $overlay = $(".overlay");
    var $overlayContainer = $(".overlay .overlay-container")
    var $overlayContent = $(".overlay .content");
    var ratioWide = 16 / 9;

    $(window).on("resize scroll", function() {
        var $vCenter = $(".v-center");
        var currentTop = $(window).scrollTop();
        $vCenter.each(function() {
            var $thisParent = $(this).parent();
            var thisHeight = $(this).height() + (parseInt($(this).css("paddingTop")) * 2);
            var outerHeight = $thisParent.height()+parseInt($thisParent.css("paddingTop"))+parseInt($thisParent.css("paddingBottom"));
            //console.log(thisHeight)
            $(this).css({ "top": (outerHeight - thisHeight) / 2 })
        })

        $overlay.css({ "top": currentTop })
        resizeVideo();
    }).resize();
    function resizeVideo() {
        $(".overlay .content iframe").height($overlayContent.width() / ratioWide);
        $overlayContainer.css({ "marginTop": -(($overlayContainer.height() + parseInt($overlayContainer.css("paddingTop")) + parseInt($overlayContainer.css("paddingBottom"))) / 2) });
    }
    $(".btn-sp a").each(function() {
        $(this).click(function(e) {
            e.preventDefault();
            var that = $(this);
            var thisType = that.attr("type");
            var prodName = $(this).parents(".prod").attr("id");
            var thisIndex = $(this).parent().index()+1;
            $overlayContainer.addClass(thisType);
            $body.addClass("overlay-enabled");
            var overlayHtml = '';
            console.log(thisType)
            switch (thisType) {
                case "video":
                    var vid = $(this).attr("vid");
                    var thisVid = prodName + vid;

                    var title = $(this).html();
                    switch (thisVid) {
                        case "jollyheapintro1":
                            overlayHtml = '<iframe width="100%" src="https://www.youtube.com/embed/DiRS0OblqeY" frameborder="0" allowfullscreen></iframe>';
                            break;
                        case "jollyheapintro2":
                            overlayHtml = '<iframe width="100%" src="https://www.youtube.com/embed/Yi5gi8pEWWg" frameborder="0" allowfullscreen></iframe>';
                    }
                    

                    break;
                case "item":
                    var title = $(".title",that).html();
                    console.log(thisIndex+lng);
                    overlayHtml = $("#ov-item" + thisIndex,".prod-items-html."+lng).html();
            }
            $overlayContent.html(overlayHtml);
            $("h3", $overlay).html(title + " - " + prodName)
            setTimeout(resizeVideo, 500);
            setTimeout(resizeVideo, 1000);
            $overlay.css({ "display": "block" }).fadeTo("fast", "1");
            $overlayContainer.css({ "display": "block" });

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
            $overlayContent.html("");
        });
    };
    //$overlay.click(closeOverlay)

});
