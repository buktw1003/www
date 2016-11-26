$(function() {

    var headerHTML;
    var thisLng = $("body").attr("class");
    var windowWidth = $(window).width();


    $(window).resize(function() {
        windowWidth = $(window).width();
    });

    $(".lng a").on("click", function() {
        $(this).toggleClass("active");
        $(".lng-menu").slideToggle(100);
    });
    $(".switch").on("click", function() {
        $(".lng").slideToggle();
        $(".menu").slideToggle();
    });
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
                if (that.is(':hover')) {} else {
                    $(">.submenu", that).not(":animated").slideUp();
                    that.removeClass("active");
                }
            }, 150);
        }
    });
    $("nav ul li").click(function(e) {
        e.stopPropagation();
        if (windowWidth <= 768) {
            $(this).toggleClass("active");
            $(">.submenu", this).not(":animated").slideToggle("fast");
        }

    });
    $(".submenu .cat").each(function(){
        var that = $(this);
        var thisParent = that.parents(".nav-categories");
        that.find(".prod a").hover(function() {
            var thisCat = $(this).parents(".cat").attr("cat");
            var prodName = $(this).attr("prodname");
            $(".rightside img",thisParent).attr("src", "/images/prod/" + thisCat +"/nav-figure/" + prodName +".jpg")
        });
    })
    /*.hover(function() {
        var that = $(this);
        var thisCat = that.attr("cat");
        console.log(thisCat);
        that.find(".prod a").hover(function() {
            var prodName = $(this).attr("prodname");
            console.log(prodName);
        });
    });*/
    //$(".nav-categories .rightside img").attr("src","/images/prod/" + thisClass + "/cat-sub-1.jpg");
    $(".backtop").click(function(){
        $("body","html").animate({"scrollTop" : 0});
    })
})
