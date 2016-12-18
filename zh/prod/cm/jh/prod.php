<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodName = "JollyHeap";
$root = $_SERVER['DOCUMENT_ROOT'];
$commVar = $root."/inc/comm_var.php";
include_once($commVar);
$header = $root."/inc/header_".$lng.".php";
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $prodName." < 嬰童與母親 - ".$title;?></title>
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
        <div class="video">
            <div class="video-container">

                <!-- <video autoplay="autoplay" loop="loop" width="100%" ><source src="video/video.mp4" type="video/mp4"></video> -->
                <iframe width="100%" src="https://www.youtube.com/embed/pxRoFYlS6EY?rel=0&amp;controls=0&amp;loop=1&amp;playlist=FKryFcf4b4k&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>

                <div class="wrapp">
                    <div class="container"><div class="caption"><h1>JollyHeap - 磁性益智布積木</h1></div></div>
                </div>

            </div>
        </div>
        <div class="block-figure clearfix">
            <div class="img"><img src="/images/prod/cm/jh/figure1.jpg" alt=""><img src="/images/prod/cm/jh/figure2.png" alt="" class="m-hide"></div>
            <div class="text onimg">
                <h3>JollyHeap - Smart Cube是一款專為孩童設計的益智玩具。</h3>
                <p>顛覆過去布積木的玩法，Smart Cube創新的思維，讓孩子發展獨一無二的想像力及創造力;
                    <br/>在玩樂的過程中孩子能夠長時間的專注其中，更有助於發展邏輯思考及社交能力！
                </p>
            </div>
        </div>
        <div class="width-limiter">

            <section class="prod-intro prod" id="jollyheap">
                <div class="top">
                    <div class="intro-bar clearfix">
                        <h2 class="title"><span class="prod-name">JollyHeap</span><span class="short-intro">磁性布積木</span></h2>

                    </div>

                    <!-- /intro-bar -->
                    <div class="main-intro clearfix">
                        <div class="image-show">
                            <div class="slides btn-sp"><a type="gallery" href="javascript:void(0);"><img src="/images/prod/cm/jh/p1.jpg" alt=""></a></div>
                            <div class="slider-assist"><img src="/images/slider_assist_4.3.png" alt=""></div>
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
                            <h3>一組積木 多種功能<br/>jollyheap益智布積木組訓練孩子：</h3>
                            <ul class="features clearfix">
                                <li>立體概念建構</li>
                                <li>創意發想能力</li>
                                <li>手眼協調能力</li>
                                <li>人際溝通能力</li>
                                <li>邏輯思考能力</li>
                            </ul>
                            <p class="right_40">Smart cube益智布積木組不只是玩具，同時兼具教育功能。smart cube幫助孩子開發腦力，陪同孩子一起成長，啟發孩子的手眼協調能力、空間、物理概念、專注力、邏輯思考能力；還有更多更多好處，等你來發現！</p>
                            <div class="pricelist">
                                <table>
                                    <tr><th colspan="4">建議售價</th></tr>
                                    <tr>
                                        <td>12pcs</td>
                                        <td>27pcs</td>
                                        <td>50pcs</td>
                                        <td>100pcs</td>
                                    </tr>
                                    <tr>
                                        <td>$11800</td>
                                        <td>$21800</td>
                                        <td>$36800</td>
                                        <td>$65800</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="btn-buy">
                                <a href="http://buk1003.shoplineapp.com/categories/jollyheap" target="_blank"><span class="t1">立</span><span class="t2">即</span><span class="t3">購</span><span class="t4">買</span></a>
                            </div>
                        </div>
                    </div>


                    <!-- /main-intro -->
                </div>
                <!-- /top -->
                <div class="content">
                    <div class="tabs">
                            <!-- <ul class="tablist clearfix">
                                <li><a href="javascript:void(0);" class="">產品介紹</a></li>
                                <li><a href="javascript:void(0);" class="">圖片集</a></li>
                            </ul> -->
                            <div class="tab-content">
                                <div class="row videos">
                                    <div class="col-md-6 col-sm-6 galleryvideo">
                                        <div class="videoWrapper">
                                            <iframe width="100%" src="https://www.youtube.com/embed/PyftOwa-FRg?rel=0&amp;showinfo=0&amp;autoplay=0" frameborder="0" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 galleryvideo">
                                        <div class="videoWrapper">
                                            <iframe width="100%" src="https://www.youtube.com/embed/DiRS0OblqeY?rel=0&amp;showinfo=0&amp;autoplay=0" frameborder="0" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row-container features">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="/images/prod/cm/jh/f1.jpg" alt="">
                                            <h3>藉由遊戲開發孩子的創造力及想像力</h3>
                                            <p>嬰兒及孩童要靠什麼來和世界做連結、互動及建構認知呢？ 答案是雙手！ 藉由肢體動作與世界互動，布積木的堆疊及多樣的組成方式能夠訓練孩子肌肉、骨骼及手眼協調能力。不只如此Jollyheap Smart cube益智布積木組讓孩子在遊戲經驗中發展結構及感知能力！</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="/images/prod/cm/jh/f2.jpg" alt="">
                                            <h3>全腦開發好幫手，建造空間能力！</h3>
                                            <p>不止手眼協調能力、空間建構也是早期孩童教育重點之一。如何在遊戲中促進孩子的想像力及創造力？答案是積木！如何讓孩子在遊戲中發現問題進而培養解決問題的觀念？答案還是積木！Jollyheap Smart cube鼓勵孩子勇於冒險，開發無限可能與想像力。大尺寸布積木Jollyheap Smart cube也是培養社交能力的一大利器！
                                            </p>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="/images/prod/cm/jh/f3.jpg" alt="">
                                            <h3>寓教於樂</h3>
                                            <p>Jollyheap益智布積木組讓孩子從堆疊積木的過程中，學習色彩、形狀、邏輯等概念。不僅如此，二維與三維空間的概念的建構、視覺動作統整能力也能一併在建構與拆解的過程中被開發。並且藉由積木的各種組合，培養跟同伴之間的互動，從小養成團隊合作的概念！</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="/images/prod/cm/jh/photo-2.jpg" alt="Magnetic Toys">
                                        </div>
                                        <div class="col-sm-6">
                                            <h3>四種形狀 組合無限</h3>
                                            <p>smart cube由四種不同形狀的布積木組成，加上內附特殊磁鐵，因此有多樣化的組合方式。無限多種可能的組合方式幫助孩子開發2維與3維空間概念。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gray row-container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>多種色彩</h3>
                                            <p>豪華款配備兩種顏色布積木，多元色彩吸引孩子的眼光，刺激孩子視覺配色能力！</p>
                                            <br>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="/images/prod/cm/jh/photo-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row-container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="/images/prod/cm/jh/photo-4.jpg" alt="JollyHeap Toys" class="coub">
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <h3>歐盟認證 品質把關</h3>
                                            <p>所有smart cube皆通過歐盟高規格認證，讓家長買得放心孩子玩得安心。</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery">
                                    <ul class="btn-sp clearfix">
                                        <?php
                                        for($g = 52; $g > 0; $g--){
                                            echo '<li><a type="gallery" href="javascript:void(0);"><img src="/images/prod/cm/jh/gallery/s/'.$g.'.jpg" alt=""></a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <!--/tab-content-->
                            <div class="tab-content">

                            </div>
                            <!--/tab-content-->
                            <!-- <ul class="tablist bottom clearfix">
                                <li><a href="javascript:void(0);" class="">產品介紹</a></li>
                                <li><a href="javascript:void(0);" class="">圖片集</a></li>
                            </ul> -->
                        </div>
                        <!--/tabs-->
                    </div>
                    <!-- /content -->
                    <div class="btn-buy">
                        <a href="http://buk1003.shoplineapp.com/categories/jollyheap" target="_blank">立即購買</a>
                    </div>
                </section>
                <!--/section.prod-intro-->
                
            </div>
        </main>
        <footer>
            <div class="width-limiter">
                <a class="btn-fb" href="https://www.facebook.com/Blumen-und-Katze-1074003162719945/?fref=ts" target="_blank">Facebook</a>
                <p>Copyright© 2016 Blumen und Katze. All rights reserved</p>
            </div>
        </footer>
        <?php include_once($root."/inc/overlay.inc"); ?>
    </body>

    </html>
