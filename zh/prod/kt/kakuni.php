<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="zh">
<?php 
$prodName = "KAKUNI";
$root = $_SERVER['DOCUMENT_ROOT'];
$commVar = $root."/inc/comm_var.php";
include_once($commVar);
$header = $root."/inc/header_".$lng.".php";
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $prodName." < 產品類別 - ".$title;?></title>
    <?php
    echo $css;
    ?>
    <script>
        var lng = "<?= $lng ?>";
    </script>
    <?php
    echo $js;
    ?>
</head>
<body class="lng-zh">
    <header>
        <?php
        include_once($header);
        ?>
    </header>
    <main>
        <div class="width-limiter">
            <section class="block-figure clearfix">
                <div class="img"><img src="/images/prod/kt/kn/figure.jpg" alt=""></div>
                <!-- <div class="text onimg"></div> -->
            </section>
            <section class="prod-intro prod" id="kakuni">
                <div class="top">
                    <div class="intro-bar clearfix">
                        <h2 class="title"><span class="prod-name">KAKUNI</span><span class="short-intro">瓷器餐具</span></h2>

                    </div>

                    <!-- /intro-bar -->
                    <div class="main-intro clearfix">
                        <div class="image-show">
                            <div class="slides"><img src="/images/prod/kt/kn/p1.jpg" alt=""></div>
                            <div class="slides-nav">
                                <div class="slide-img">
                                    <ul class="img clearfix">
                                        <?php
                                        include $root."/inc/prod/slideimgs/".strtolower($prodName).".inc";
                                        ?>
                                    </ul>

                                </div>
                                <div class="slide-img-assist">
                                    <img src="/images/prod/main-img-assist.png" alt="">
                                </div>
                                <div class="arrow">
                                    <a class="slide-prev" href="javascript:;">Prev</a>
                                    <a class="slide-next" href="javascript:;">Next</a>
                                </div>
                            </div>
                        </div>

                        <div class="intro-text">
                            <h3>「瓷器・日常。」</h3>
                            <p>總是默默的替你承載各式各樣的生活軌跡<br/>
                                瓷器像個不多話的好朋友，靜靜的陪伴在每一個你需要的時刻<br/>
                            </p>
                            <p>跳脫傳統，日本kakuni為您帶來便利生活的日常瓷器。</p>
                        </div>
                    </div>
                    <!-- /main-intro -->
                </div>
                <!-- /top -->
                <div class="content">
                    <div class="items">
                        <ul class="row btn-sp">
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it1.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">HOPE馬克杯</span>
                                        <span class="intro">色彩豐富的hope馬克杯，讓你按照每天的心情挑選不同顏色的杯子來使用！</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it2.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">週一專用馬克杯！</span>
                                        <span class="intro">繽紛色彩配上充滿活力的slogan，讓你一整天好心情！</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it3.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 77.75px;">
                                        <span class="title">
                                            <span>100%</span><span>鳥居馬克杯</span>
                                        </span>
                                        <span class="intro">可愛小鳥居馬克杯。</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it4.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 77.75px;">
                                        <span class="title">富士山馬克杯</span>
                                        <span class="intro">日本精神象徵的馬克杯，不必特地跑到日本，現在也可以出現在你的身邊！</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it5.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">兒童餐具組-杯</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it6.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">兒童餐具組-湯碗</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it7.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">烤箱小陶瓷鍋</span>
                                        <span class="intro">
                                            mini小陶瓷鍋，可微波、可入烤箱、可用洗碗機清洗<br/>
                                            上蓋有把手，方便拿取。製作一人份料理剛剛好！
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it8.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">je pense a toi 茶壺組-壺（付濾茶網）</span>
                                        <span class="intro">
                                            一人使用也剛剛好的容量！附不鏽鋼濾茶網。<br/>
                                            壺底特殊設計，可收納專屬馬克杯！
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it9.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">je pense a toi 茶壺組-杯</span>
                                        <span class="intro">je pense a toi專用馬克杯。可收納於茶壺底部。</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it10.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">海洋風杯盤組- 杯</span>
                                        <span class="intro">
                                            星期天專用天藍色杯盤組！<br/>
                                            舒適的天藍色，適合週末早晨的第一杯咖啡！
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it11.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">海洋風杯盤組- 盤</span>
                                        <span class="intro">
                                            星期天專用天藍色杯盤組！<br/>
                                            舒適的天藍色，適合週末早晨的第一餐！
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it12.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">法國風情瓷器</span>
                                        <span class="intro">
                                            還在用美耐皿餐盤嗎？快點丟掉吧！<br/>
                                            bonne journee瓷盤，穩重的色調，環保的材質，是您餐桌上的好朋友！
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it13.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">黑備前冷酒器</span>
                                        <span class="intro">
                                            酒瓶上方特殊設計可放置冰塊，可保冷、冷酒。<br/>
                                            特殊設計倒酒時不會把冰塊灑出來喔！
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/kn/items/it14.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">達摩酒杯</span>
                                        <span class="intro">達摩造型小酒杯。</span>
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /content -->
            </section>
            <!--/prod-intro-->
            <section class="prod-mall"></section>
        </div>
    </main>
    <footer>
        <div class="width-limiter">
            <a class="btn-fb" href="https://www.facebook.com/Blumen-und-Katze-1074003162719945/?fref=ts" target="_blank">Facebook</a>
            <p>Copyright© 2016 Blumen und Katze. All rights reserved</p>
        </div>
    </footer>
    <?php include_once($root."/inc/prod/kakuni_overlay.php"); ?>
</body>

</html>
