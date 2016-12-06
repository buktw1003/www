<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodName = "KAKUNI";
$prodSn = "kn";
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
                        <h2 class="title"><span class="prod-name">KAKUNI</span><span class="short-intro">ポーセリン食器</span></h2>

                    </div>

                    <!-- /intro-bar -->
                    <div class="main-intro clearfix">
                        <div class="image-show">
                            <div class="slides"><img src="/images/prod/kt/kn/p1.jpg" alt=""></div>
                            <div class="slides-nav">
                                <div class="slide-img">
                                    <ul class="img clearfix">
                                        <?php
                                        include_once($root."/inc/prod/slideimgs/".strtolower($prodName).".inc");
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
                            <p>
                                普段の何気ない生活の中に、<br/>
                                ただただ使いやすく、ただただ気に入った<br/>
                                お気に入りの器たちを使ってもらいたくて・・・<br/>
                                そんな思いで、かじゅあるらいふは生まれました。<br/>
                                かじゅあるらいふな器たちは「和」もあれば「少し洋」なものも、<br/>
                                かと思えば「和なの？洋なの？」といった器たちまで、個性豊かです。<br/>
                                だから普通なら「カジュアルライフ」な所をあえて<br/>
                                「かじゅあるらいふ」で表現。
                            </p><br/>
                            <p>
                                もう「和」も「洋」も関係ない！<br/>
                                使っていただける方々が気に入っていただければ<br/>
                                くくりなんてものは、正直どうでもいいんです。<br/>
                                これが私たちの本音です。<br/>
                                日々の生活の中、かじゅあるらいふな器たちが、<br/>
                                食卓を「なにげなく」彩ることが出来るのならば・・・<br/>
                                それが一番の幸せです。
                            </p>
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
                                        <span class="title">Mug - HOPE</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it2.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">Mug - MOOD</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it3.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 77.75px;">
                                        <span class="title">Mug -鳥居</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it4.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 77.75px;">
                                        <span class="title">Mug -富士山 MT.FUJI</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it5.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">Mug -BOY &GIRL</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it6.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">耳付スープ -BOY &GIRL</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it7.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">YUMMYPOT</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it8.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">Je pense a toi POT</span>
                                    </span>
                                </a>
                        </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it9.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">je pense a toi 茶壺組-杯</span>
                                        <span class="intro">je pense a toi專用馬克杯。可收納於茶壺底部。</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="javascript:;" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it10.jpg" alt=""></span>
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
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it11.jpg" alt=""></span>
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
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it12.jpg" alt=""></span>
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
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it13.jpg" alt=""></span>
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
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it14.jpg" alt=""></span>
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
