<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodName = "Riding Horse";
$prodCode = "mg";
$prodCat = "cm";
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
                            <div class="slides btn-sp"><a type="gallery" href="javascript:void(0);"><img src="/images/prod/cm/mg/p1.jpg" alt=""></a></div>
                            <div class="slider-assist"><img src="/images/slider_assist_4.3.png" alt=""></div>
                            <div class="slides-nav">
                                <div class="slide-img">
                                    <ul class="img clearfix">
                                        <?php
                                        include_once($root."/inc/prod/slideimgs/".strtolower($prodCode).".inc");
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
                            <!-- <div class="btn-buy">
                                <a href="http://buk1003.shoplineapp.com/categories/jollyheap" target="_blank"><span class="t1">立</span><span class="t2">即</span><span class="t3">購</span><span class="t4">買</span></a>
                            </div> -->
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
                                <div class="gallery">
                                    <ul class="btn-sp clearfix">
                                        <?php
                                        for($g = 22; $g > 0; $g--){
                                            echo '<li><a type="gallery" href="javascript:void(0);"><img src="/images/prod/cm/mg/gallery/s/'.$g.'.jpg" alt=""></a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <!-- <div class="btn-buy">
                                    <a href="http://buk1003.shoplineapp.com/categories/jollyheap" target="_blank">立即購買</a>
                                </div> -->
                                
                                <!--sets-->
                                
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
                        <div class="btn-buy">
                            <a href="http://buk1003.shoplineapp.com/categories/jollyheap" target="_blank">立即購買</a>
                        </div>
                    </div>
                    <!-- /content -->
                    
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
