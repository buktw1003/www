$(function() {
    var $overlay = $(".overlay");
    var $overlayContainer = $(".overlay .overlay-container")
    var $overlayVideo = $(".overlay .video");
    var ratioWide = 16 / 9;





    $(window).on("resize scroll", function() {
        var $vCenter = $(".v-center");
        var currentTop = $(window).scrollTop();
        $vCenter.each(function() {
            var thisHeight = $(this).height() + (parseInt($(this).css("paddingTop")) * 2);
            var outerHeight = $(this).parent().height();
            //console.log(thisHeight)
            $(this).css({ "top": (outerHeight - thisHeight) / 2 })
        })

        $overlay.css({ "top": currentTop })
        resizeVideo();
    }).resize();

    function resizeVideo() {
        $(".overlay .video iframe").height($overlayVideo.width() / ratioWide);
        $overlayContainer.css({ "marginTop": -(($overlayContainer.height() + parseInt($overlayContainer.css("paddingTop")) + parseInt($overlayContainer.css("paddingBottom"))) / 2) });
    }
    $(".btn-sp a").each(function() {
        $(this).click(function(e) {
            e.preventDefault();
            var prodName = $(this).parents(".prod").attr("id");
            var vid = $(this).attr("vid");
            var thisVid = prodName + vid;
            var aHtml = $(this).html();
            console.log(aHtml)
            var iframeHtml = '';
            console.log(prodName + vid);
            switch (thisVid) {
                case "jollyheapintro1":
                    iframeHtml = '<iframe width="100%" src="https://www.youtube.com/embed/DiRS0OblqeY" frameborder="0" allowfullscreen></iframe>';
                    break;
                case "jollyheapintro2":
                    iframeHtml = '<iframe width="100%" src="https://www.youtube.com/embed/Yi5gi8pEWWg" frameborder="0" allowfullscreen></iframe>';
            }
            $("h3", $overlay).html(aHtml + " - " + prodName)
            $overlayVideo.append(iframeHtml);
            setTimeout(resizeVideo, 500);
            setTimeout(resizeVideo, 1000);
            $overlay.css({ "display": "block" }).fadeTo("fast", "1");3
            $overlayContainer.css({"display" : "block"});

        });
    });
    $overlayContainer.click(function(e) {
        e.stopPropagation();
    })
    $(".btn-close").click(function(e) {
        e.preventDefault();
        closeOverlay();
    });

    function closeOverlay() {
        $overlay.fadeTo("fast", "0", function() {
            $overlay.css({ "display": "none" });
            $overlayContainer.css({"display" : "none"});
            $overlayVideo.html("");
        })

    }
    $overlay.click(closeOverlay)
})
