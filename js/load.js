$(function() {
    var headerHTML;
    var thisLng = $("body").attr("class");
    var windowWidth = $(window).width();
    switch (thisLng) {
        case "lng-en":
            headerHTML = "/inc/header_en.html"
            break;
        case "lng-zh":
            headerHTML = "/inc/header_zh.html"
            break;
    }
    $(window).resize(function() {
        windowWidth = $(window).width();
    })
    $("header").load(headerHTML, function() {
        $(".lng a").on("click", function() {
            $(this).toggleClass("active");
            $(".lng-menu").slideToggle(100);
        });


        $(".switch").on("click", function() {
            $(".lng").slideToggle();
            $(".menu").slideToggle();
        })

        $("nav ul li").hover(function() {
            var that = $(this);
            if (windowWidth >= 768) {

                setTimeout(function() {
                    if (that.is(':hover')) {
                        that.addClass("active");
                        $(">.submenu", that).not(":animated").slideDown("fast");
                    }
                }, 100)

            }

        }, function() {
            if (windowWidth >= 768) {
                var that = $(this);
                setTimeout(function() {
                    if (that.is(':hover')) {
                        
                    } else{
                        $(">.submenu", that).not(":animated").slideUp();
                        that.removeClass("active");
                    }
                }, 100)

            }

        });
        $("nav ul li").click(function(e) {
            e.stopPropagation();
            $(this).toggleClass("active");
            $(">.submenu", this).not(":animated").slideToggle("fast");
        })
        $(".sub-1>li").each(function() {
            var that = $(this);
            var thisIndex = that.index() + 1;
            var thisClass = that.attr("cat");

            function checkimg(src, success, fail) {
                var img = new Image();
                img.onload = success;
                img.onerror = fail;
                img.src = src;
            }

        });
        //$(".nav-categories .rightside img").attr("src","/images/prod/" + thisClass + "/cat-sub-1.jpg")
    })
})
