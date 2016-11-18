<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
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
    echo $css.$js;
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
                        <li>
                            <a href=""><img src="/images/prod/cm/jh/banner/slider1.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="/images/prod/cm/jh/banner/slider2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="/images/prod/cm/jh/banner/slider3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="/images/prod/cm/jh/banner/slider4.jpg" alt=""></a>
                        </li>
                    </ul>
                    <ul class="pager"></ul>
                </div>
                <div class="popular">
                    <img src="/images/index/slider-assist.png" alt="">
                </div>
            </section>
            <section class="block-categories">
                <ul class="clearfix">
                    <li><a href="/<?php echo $lng;?>/prod/jollyheap.php"><img src="/images/index/it1.jpg" alt="Most Popular"></a></li>
                    <li>
                        <a href=""><img src="/images/index/it2.jpg" alt="Kitchen"></a>
                    </li>
                    <li>
                        <a href=""><img src="/images/index/it3.jpg" alt="Home Decor"></a>
                    </li>
                    <li>
                        <a href=""><img src="/images/index/it4.jpg" alt="Stationery"></a>
                    </li>
                </ul>
            </section>
            <section class="block-products">
                <h2 class="top-products">Top Products</h2>
                <div id="jollyheap" class="prod">
                    <div class="intro-bar clearfix">
                        <h3><span class="short-intro">磁性布积木</span><span class="prod-name">JollyHeap</span></h3>
                        <div class="btn-sp btn-video">
                            <a href="#" vid="intro1">介绍影片 1</a>
                            <a href="#" vid="intro2">介绍影片 2</a>
                        </div>
                        <div class="btn-detail"><a href="/<?php echo $lng;?>/prod/jollyheap.php">详细信息</a></div>
                    </div>
                    <div class="intro clearfix">
                        <div class="col-33 dk main-intro">
                            <div class="intro-wrap clearfix">
                                <div class="img">
                                    <img src="/images/index/prod-1-1.jpg" alt="">
                                </div>
                                <div class="text v-center">
                                    <h4>JollyHeap - Smart Cube<br/>是一款专为孩童设计的益智玩具。</h4>
                                    <p>颠覆过去布积木的玩法，Smart Cube创新的思维，让孩子发展独一无二的想象力及创造力;<br/>在玩乐的过程中孩子能够长时间的专注其中，更有助于发展逻辑思考及社交能力！</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-66 fl-l grid">
                            <ul class="spl-33 cycle clearfix">
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/index/prod-2-1.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/index/icon-magnetism.png" alt=""></div>
                                            <h4>完美连结</h4>
                                            <p>Smart Cube内含软磁铁，便于积木的组合；完美连结孩子的大脑与建构能力。</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/index/prod-2-2.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/index/icon-light.png" alt=""></div>
                                            <h4>好轻好玩</h4>
                                            <p>各积木重量不超过150g<br/>让各年龄层的孩子都能轻易拿取</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/index/prod-2-3.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/index/icon-safety.png" alt=""></div>
                                            <h4>安全第一</h4>
                                            <p>Smart Cube全材质由柔软无尖锐角度的软材质制成</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/index/prod-2-4.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/index/icon-multi.png" alt=""></div>
                                            <h4>一物多工</h4>
                                            <p>不只是玩具，还是孩子的城堡、汽车；更是大人的沙发、茶几、踮脚凳！</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/index/prod-2-5.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/index/icon-quiet.png" alt=""></div>
                                            <h4>安静无声</h4>
                                            <p>全材质由柔软的材料制成，玩乐过程中只有孩子的笑声，妈妈好开心！</p>                              
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="intro-wrap">
                                        <div class="img">
                                            <img src="/images/index/prod-2-6.jpg" alt="">
                                        </div>
                                        <div class="text v-center">
                                            <div class="icon"><img src="/images/index/icon-durability.png" alt=""></div>
                                            <h4>经久耐用</h4>
                                            <p>所有材料皆经过严格挑选，一物多任务之外还可长时间使用，让您物超所值！</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /prod jollyheap -->
                
            </section>
        </div></main>
        <footer>
            <div class="width-limiter">
                <a class="btn-fb" href="https://www.facebook.com/Blumen-und-Katze-1074003162719945/?fref=ts" target="_blank">Facebook</a>
                <p>Copyright© 2016 Blumen und Katze. All rights reserved</p>
            </div>
        </footer>
        <div class="overlay">
            <div class="overlay-container">
                <div class="top">
                    <h3>Intro 1 - jollyheap</h3>
                    <a class="btn-close" href="#"><span>close</span></a>
                </div>
                <div class="video">

                </div>
            </div>
        </div>
    </body>

    </html>
