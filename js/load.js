$(function() {
    var headerHTML;
    var thisLng = $("body").attr("class");
    switch (thisLng) {
        case "lng-en":
            headerHTML = "/inc/header_en.html"
            break;
        case "lng-zh":
            headerHTML = "/inc/header_zh.html"
            break;
    }
    $("header").load(headerHTML, function() {
        $(".lng a").on("click", function() {
            $(this).toggleClass("active");
            $(".lng-menu").slideToggle(100);
        });
        $("nav ul li").hover(function(){
            $(this).addClass("active");
            $(">.submenu",this).not(":animated").slideDown("fast");
        },function(){
            $(">.submenu",this).not(":animated").slideUp();
            $(this).removeClass("active");
        });

        $(".sub-1>li").each(function(){
            var that = $(this);
            var thisIndex = that.index()+1;
            var thisClass = that.attr("cat");
            function checkimg(src,success,fail){
                var img = new Image();
                img.onload = success;
                img.onerror = fail;
                img.src = src;
            }
            
        });
         //$(".nav-categories .rightside img").attr("src","/images/prod/" + thisClass + "/cat-sub-1.jpg")
    })
})
