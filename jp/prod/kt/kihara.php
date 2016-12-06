<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodName = "KIHARA";
$prodSn = "kh";
$prodCat = "kt";
$root = $_SERVER['DOCUMENT_ROOT'];
$commVar = $root."/inc/comm_var.php";
include_once($commVar);
$header = $root."/inc/header_".$lng.".php";
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $prodName." < キッチン - ".$title;?></title>
    <?php
    echo $css;
    ?>
    <script>
        var lng = "jp";
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
                <div class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/figure.jpg" alt=""></div>
                <!-- <div class="text onimg"></div> -->
            </section>
            <section class="prod-intro prod" id="kihara">
                <div class="top">
                    <div class="intro-bar clearfix">
                        <h2 class="title"><span class="prod-name">KIHARA</span><span class="short-intro">瓷器餐具</span></h2>

                    </div>

                    <!-- /intro-bar -->
                    <div class="main-intro clearfix">
                        <div class="image-show">
                            <div class="slides"><img src="/images/prod/kt/<?php echo $prodSn ;?>/p1.jpg" alt=""></div>
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
                            <p>跳脫傳統，日本KIHARA為您帶來便利生活的日常瓷器。</p>
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
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it1.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">鍋島様式  髙橋正</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it2.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">古伊万里様式 金襴手</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it3.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 77.75px;">
                                        <span class="title">初期伊万里様式 佐藤晃一</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it4.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 77.75px;">
                                        <span class="title">KIHARA - HANA</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it5.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">KIHARA - 古白磁</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it6.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">KIHARA - SITAKU</span>
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
    <?php include_once($root."/inc/prod/kihara_overlay.php"); ?>
</body>

</html>
