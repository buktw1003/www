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
        $("nav ul li").hover(function() {
            $(this).addClass("active");
            $(">.submenu", this).not(":animated").slideDown("fast");
        }, function() {
            $(">.submenu", this).not(":animated").slideUp();
            $(this).removeClass("active");
        });

        $(".sub-1 li").each(function() {
            var that = $(this);
            var thisIndex = that.index() + 1;
            var thisCat = that.attr("cat");
            if (that.parent().attr("class") == "sub-2") {
                that.addClass("asdff")
            }
            var thisProdname = that.find(".prod").attr("prodname");
            var thisImg = "/images/prod/" + thisCat + "/cat-sub-1.jpg";

            function checkimg(src, success, fail) {
                var img = new Image();
                img.onload = success;
                img.onerror = fail;
                img.src = src;
            }
            that.on("mouseover", function() {


                console.log("thiscat" + thisCat)
                checkimg(thisImg, function() {
                    //console.log(thisImg);
                    $(".nav-categories .rightside img").attr("src", thisImg)
                }, function() {
                    //console.log("bbb")
                })
            })
            that.hover()
        });
    })
})
