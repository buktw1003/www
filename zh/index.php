<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodCode = "index";
$root = $_SERVER['DOCUMENT_ROOT'];
$commVar = $root."/inc/comm_var.php";

include_once($commVar);
$header = $root."/inc/header_".$lng.".php";
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "首頁 - ".$title;?></title>
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
            <section class="block-promo clearfix">
                <div class="slider">
                    <ul class="img">
                        <?php
                        echo $indexSliders;
                        ?>
                    </ul>
                    <ul class="pager"></ul>
                    <div class="popular">
                        <img src="/images/index/slider-assist.png" alt="">
                    </div>
                </div>
            </section>
            <section class="block-categories">
                <ul class="clearfix">
                    <li><a href="/<?php echo $lng;?>/prod/cm/jh/prod.php"><img src="/images/index/it1-zh.jpg" alt="Most Popular"></a></li>
                    <li><a href="/<?php echo $lng;?>/prod/kt/kihara.php"><img src="/images/index/it2-zh.jpg" alt="Kitchen"></a></li>
                    <li><a href=""><img src="/images/index/it3-zh.jpg" alt="Home Decor"></a></li>
                    <li><a href=""><img src="/images/index/it4-zh.jpg" alt="Stationery"></a></li>
                </ul>
            </section>
            <section class="block-products">
                <h2 class="top-products">Top Products</h2>
                <div id="jollyheap" class="prod">
                    <div class="intro-bar clearfix">
                        <h3 class="title"><span class="short-intro">磁性布積木</span><span class="prod-name">JollyHeap</span></h3>
                        <div class="btn-sp btn-video">
                            <a href="#" vid="intro1" type="video" vidsrc='<iframe width="100%" src="https://www.youtube.com/embed/DiRS0OblqeY" frameborder="0" allowfullscreen></iframe>'>介紹影片 1</a>
                            <a href="#" vid="intro2" type="video" vidsrc='<iframe width="100%" src="https://www.youtube.com/embed/Yi5gi8pEWWg" frameborder="0" allowfullscreen></iframe>'>介紹影片 2</a>
                        </div>
                        <div class="btn-detail"><a href="/<?php echo $lng;?>/prod/cm/jh/prod.php">詳細資訊</a></div>
                    </div>
                    <div class="intro clearfix">
                        <div class="col-33 brief-intro">
                            <div class="slider">
                                <ul class="img">
                                    <li class="active" style="z-index: 998; opacity: 1;"><a href="/zh/prod/cm/jh/prod.php"><img src="/images/prod/cm/jh/index/prod-1-1.jpg" alt=""></a></li>
                                    <li class="" style="z-index: 997; opacity: 0;"><a href="/zh/prod/cm/jh/prod.php"><img src="/images/prod/cm/jh/index/prod-1-2.jpg" alt=""></a></li>
                                    <li class="" style="z-index: 996; opacity: 0;"><a href="/zh/prod/cm/jh/prod.php"><img src="/images/prod/cm/jh/index/prod-1-3.jpg" alt=""></a></li>
                                </ul>
                                <ul class="pager"><li id="pager0" class="active"><a href=""></a></li><li id="pager1" class=""><a href=""></a></li><li id="pager2" class=""><a href=""></a></li><li id="pager3" class=""><a href=""></a></li></ul>
                                <div class="popular">
                                    <img src="/images//slider_assist_indexleft.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-66 fl-l grid">
                            <ul class="spl-33 cycle clearfix">
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/prod/cm/jh/index/prod-2-1.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/prod/cm/jh/icons/icon-magnetism.png" alt=""></div>
                                            <h4>完美連結</h4>
                                            <p>Smart Cube內含軟磁鐵，便於積木的組合；完美連結孩子的大腦與建構能力。</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/prod/cm/jh/index/prod-2-2.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/prod/cm/jh/icons/icon-light.png" alt=""></div>
                                            <h4>好輕好玩</h4>
                                            <p>各積木重量不超過150g<br/>讓各年齡層的孩子都能輕易拿取</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/prod/cm/jh/index/prod-2-3.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/prod/cm/jh/icons/icon-safety.png" alt=""></div>
                                            <h4>安全第一</h4>
                                            <p>Smart Cube全材質由柔軟無尖銳角度的軟材質製成</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/prod/cm/jh/index/prod-2-4.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/prod/cm/jh/icons/icon-multi.png" alt=""></div>
                                            <h4>一物多工</h4>
                                            <p>不只是玩具，還是孩子的城堡、汽車；更是大人的沙發、茶几、踮腳凳！</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/prod/cm/jh/index/prod-2-5.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/prod/cm/jh/icons/icon-quiet.png" alt=""></div>
                                            <h4>安靜無聲</h4>
                                            <p>全材質由柔軟的材料製成，玩樂過程中只有孩子的笑聲，媽媽好開心！</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/prod/cm/jh/index/prod-2-6.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/prod/cm/jh/icons/icon-durability.png" alt=""></div>
                                            <h4>經久耐用</h4>
                                            <p>所有材料皆經過嚴格挑選，一物多工之外還可長時間使用，讓您物超所值！</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /prod jollyheap -->
                <div id="kihara" class="prod">
                    <div class="intro-bar clearfix">
                        <h3 class="title"><span class="short-intro">瓷器餐具</span><span class="prod-name">KIHARA</span></h3>
                        <div class="btn-detail"><a href="/<?php echo $lng;?>/prod/kt/kihara.php">詳細資訊</a></div>
                    </div>
                    <div class="intro clearfix">
                        <div class="col-33 brief-intro">
                            <div class="intro-wrap clearfix">
                                <div class="slider">
                                <ul class="img">
                                    <li class="active" style="z-index: 998; opacity: 1;"><a href="/zh/prod/kt/kh/prod.php"><img src="/images/prod/kt/kh/index/prod-1-1.jpg" alt=""></a></li>
                                    <li class="" style="z-index: 997; opacity: 0;"><a href="/zh/prod/kt/kh/prod.php"><img src="/images/prod/kt/kh/index/prod-1-2.jpg" alt=""></a></li>
                                    <li class="" style="z-index: 996; opacity: 0;"><a href="/zh/prod/kt/kh/prod.php"><img src="/images/prod/kt/kh/index/prod-1-3.jpg" alt=""></a></li>
                                </ul>
                                <ul class="pager"><li id="pager0" class="active"><a href=""></a></li><li id="pager1" class=""><a href=""></a></li><li id="pager2" class=""><a href=""></a></li><li id="pager3" class=""><a href=""></a></li></ul>
                                <div class="popular">
                                    <img src="/images//slider_assist_indexleft.png" alt="">
                                </div>
                            </div>
                                <div class="text v-center">
                                    <h4>「瓷器・日常。」</h4>
                                    <p>總是默默的替你承載各式各樣的生活軌跡<br/>
                                        瓷器像個不多話的好朋友，靜靜的陪伴在每一個你需要的時刻<br/>
                                        跳脫傳統，日本KIHARA為您帶來便利生活的日常瓷器。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-66 fl-l grid">
                                <ul class="spl-33 clearfix">
                                    <li>
                                        <div class="intro-wrap">
                                            <div class="img">
                                                <img src="/images/prod/kt/kh/index/prod-2-1.jpg" alt="">
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="intro-wrap">
                                            <div class="img">
                                                <img src="/images/prod/kt/kh/index/prod-2-2.jpg" alt="">
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="intro-wrap">
                                            <div class="img">
                                                <img src="/images/prod/kt/kh/index/prod-2-3.jpg" alt="">
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="intro-wrap">
                                            <div class="img">
                                                <img src="/images/prod/kt/kh/index/prod-2-4.jpg" alt="">
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="intro-wrap">
                                            <div class="img">
                                                <img src="/images/prod/kt/kh/index/prod-2-5.jpg" alt="">
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="intro-wrap">
                                            <div class="img">
                                                <img src="/images/prod/kt/kh/index/prod-2-6.jpg" alt="">
                                            </div>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /prod kihara -->
                </section>
            </div></main>
            <footer>
                <div class="width-limiter">
                    <a class="btn-fb" href="https://www.facebook.com/Blumen-und-Katze-1074003162719945/?fref=ts" target="_blank">Facebook</a>
                    <p>Copyright© 2016 Blumen und Katze. All rights reserved</p>
                </div>
            </footer>
            <?php include_once($root."/inc/overlay.inc"); ?>
        </body>

        </html>
