<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodName = "KIHARA";
$prodCode = "kh";
$prodCat = "kt";
$root = $_SERVER['DOCUMENT_ROOT'];
$commVar = $root."/inc/comm_var.php";
include_once($commVar);
$header = $root."/inc/header_".$lng.".php";
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $prodName." < 廚房用品 - ".$title;?></title>
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
                <div class="img"><img src="/images/prod/kt/<?php echo $prodCode ;?>/figure.jpg" alt=""></div>
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
                            <div class="slides btn-sp"><a type="gallery" href="javascript:;"><img src="/images/prod/kt/<?php echo $prodCode ;?>/p1.jpg" alt=""></a></div>
                            <div class="slider-assist"><img src="/images/slider_assist_4.3.png" alt=""></div>
                            <div class="slides-nav">
                                <div class="slide-img">
                                    <ul class="img clearfix">
                                        <li><a href="javascript:;"><img src="/images/prod/sp/<?php echo $prodCode ;?>/p1.jpg" alt=""></a></li>
                                        <li><a href="javascript:;"><img src="/images/prod/sp/<?php echo $prodCode ;?>/p2.jpg" alt=""></a></li>
                                        <li><a href="javascript:;"><img src="/images/prod/sp/<?php echo $prodCode ;?>/p3.jpg" alt=""></a></li>
                                        <li><a href="javascript:;"><img src="/images/prod/sp/<?php echo $prodCode ;?>/p4.jpg" alt=""></a></li>                  
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
                            <div class="btn-buy"><a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/%E5%BB%9A%E6%88%BF%E7%94%A8%E5%93%81" target="_blank">立即訂購</a></div>
                        </div>
                    </div>

                    <!-- /main-intro -->
                </div>
                <!-- /top -->
                <div class="content">
                    <div class="items">
                        <ul class="row btn-scrollTo">
                            <li class="col-xs-4">
                                <a href="#ov-item1" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodCode ;?>/items/it1.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">鍋島様式<br/>髙橋正</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="#ov-item2" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodCode ;?>/items/it2.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">古伊万里様式<br/>金襴手</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="#ov-item3" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodCode ;?>/items/it3.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 77.75px;">
                                        <span class="title">初期伊万里様式<br/>佐藤晃一</span>
                                    </span>
                                </a>
                            </li>



                        </ul>
                    </div>
                    <div id="ov-item1" class="ov-item">
                        <div class="clearfix">
                            <div class="intro">

                                <h4>鍋島樣式</h4>
                                <p>設計師高橋正用傳統紋飾參入抽象意念，盤側以悠遊空中的燕子圖紋點綴，配上花草盛開的盤面；<br/>漂浮在水面上抽象山茶花圖樣替整體更添風采</p>
                            </div>
                            <div class="image-show">
                                <div class="slides btn-sp">
                                    <a type="gallery" href="javascript:;">
                                        <img src="/images/prod/kt/kh/items/it1-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="slider-assist"><img src="/images/slider_assist_4.3.png" alt=""></div>
                                <div class="slides-nav">
                                    <div class="slide-img">
                                        <ul class="img clearfix">
                                            <li style="left: 0px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it1-1.jpg" alt=""></a></li>
                                            <li style="left: 25px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it1-2.jpg" alt=""></a></li>
                                            <li style="left: 50px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it1-3.jpg" alt=""></a></li>
                                            <li style="left: 75px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it1-4.jpg" alt=""></a></li>
                                            <li style="left: 100px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it1-5.jpg" alt=""></a></li>
                                            <li style="left: 125px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it1-6.jpg" alt=""></a></li>
                                            <li style="left: 150px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it1-7.jpg" alt=""></a></li>
                                            <li style="left: 175px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it1-8.jpg" alt=""></a></li>
                                        </ul>

                                    </div>
                                    <div class="slide-img-assist">
                                        <img src="/images/prod/main-img-assist.png" alt="">
                                    </div>
                                    <div class="arrow">
                                        <a class="slide-prev inactive" href="javascript:;">Prev</a>
                                        <a class="slide-next" href="javascript:;">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="spec clearfix">

                                <div class="spec-table">
                                    <table>
                                        <tr>
                                            <th>型號</th>
                                            <th>顏色</th>
                                            <th>尺寸</th>
                                            <th>微波爐使用</th>
                                            <th>洗碗機使用</th>
                                            <th>建議售價</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH001</th>
                                            <td>燕子紋</td>
                                            <td>φ30 H7cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$24800</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH002</th>
                                            <td>山茶花紋</td>
                                            <td>φ30 H7cm</td>
                                            <td>可</td>
                                            <td>不可</td>
                                            <td>$29800</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH003</th>
                                            <td>燕子紋</td>
                                            <td>φ15 H3cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$3980</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH004</th>
                                            <td>山茶花紋</td>
                                            <td>φ15 H3cm</td>
                                            <td>可</td>
                                            <td>不可</td>
                                            <td>$4680</td>
                                        </tr>

                                    </table>
                                    <p>*手工繪製，花色皆有若干差異。</p>
                                </div>
                            </div>
                            <a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/kihara-%E9%8D%8B%E5%B3%B6%E6%A7%98%E5%BC%8F" target="_blank">立即訂購</a>
                        </div>
                    </div>
                    <div id="ov-item2" class="ov-item" class="">
                        <div class="clearfix">
                            <div class="intro">

                                <h4>古伊萬里樣式 - 金襴手</h4>
                                <p>金襴手為伊萬里・有田燒譜系分支之一，作品如其名，利用金彩絢爛的色調重現江戶元祿時期流行的巴洛克/洛可可風格燒物。</p>
                                <p>有別於近代華麗的風格，作者永井一正將日本文化獨特的美意識揉捏其中，以傳統的技法製作出具現代感的瓷器，使舊與新之間取得完美的平衡。</p>
                            </div>
                            <div class="image-show">
                                <div class="slides btn-sp"><a type="gallery" href="javascript:;"><img src="/images/prod/kt/kh/items/it2-1.jpg" alt=""></a></div>
                                <div class="slider-assist"><img src="/images/slider_assist_4.3.png" alt=""></div>
                                <div class="slides-nav">
                                    <div class="slide-img">
                                        <ul class="img clearfix">
                                            <li style="left: 0px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it2-1.jpg" alt=""></a></li>
                                            <li style="left: 25px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it2-2.jpg" alt=""></a></li>
                                            <li style="left: 50px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it2-3.jpg" alt=""></a></li>
                                            <li style="left: 100px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it2-5.jpg" alt=""></a></li>
                                        </ul>

                                    </div>
                                    <div class="slide-img-assist">
                                        <img src="/images/prod/main-img-assist.png" alt="">
                                    </div>
                                    <div class="arrow">
                                        <a class="slide-prev inactive" href="javascript:;">Prev</a>
                                        <a class="slide-next inactive" href="javascript:;">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="spec clearfix">


                                <div class="spec-table">
                                    <table>
                                        <tr>
                                            <th>型號</th>
                                            <th>顏色</th>
                                            <th>尺寸</th>
                                            <th>微波爐使用</th>
                                            <th>洗碗機使用</th>
                                            <th>建議售價</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH005</th>
                                            <td>鷹紋(盤·大)</td>
                                            <td>φ30 H4cm</td>
                                            <td>不可</td>
                                            <td>不可</td>
                                            <td>$99000</td>
                                        </tr>
                                        <!-- <tr>
                                            <th>KT-KH006</th>
                                            <td>鷹紋(盤·中)</td>
                                            <td>φ14.5 H2.5cm</td>
                                            <td>不可</td>
                                            <td>不可</td>
                                        </tr> -->
                                        <!-- <tr>
                                            <th>KT-KH007</th>
                                            <td>鷹紋(杯)</td>
                                            <td>φ7.8 H6cm</td>
                                            <td>不可</td>
                                            <td>不可</td>
                                        </tr> -->
                                        <tr>
                                            <th>KT-KH008</th>
                                            <td>金襴手古伊万里金魚紋</td>
                                            <td>φ36.5 H5cm</td>
                                            <td>不可</td>
                                            <td>不可</td>
                                            <td>$99000</td>
                                        </tr>

                                    </table>
                                </div>
                                
                            </div>
                            <a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/%E5%8F%A4%E4%BC%8A%E4%B8%87%E9%87%8C%E6%A8%A3%E5%BC%8F-%E9%87%91%E8%A5%B4%E6%89%8B" target="_blank">立即訂購</a>
                        </div>
                    </div>
                    <div id="ov-item3" class="ov-item" class="">
                        <div class="clearfix">
                            <div class="intro">
                                <h4>初期伊萬里樣式</h4>
                                <p>17世紀前期，伊萬里有田燒所流行的風格稱之為“初期伊萬里樣式”</p>
                                <p>此系列作品為初期伊萬里樣式的有田燒，作者佐藤 晃一先生將線條圓潤飽滿的粗胚佐以今日常見的藍染紋路，完美融合古今樣式</p>
                            </div>
                            <div class="image-show">
                                <div class="slides btn-sp"><a type="gallery" href="javascript:;"><img src="/images/prod/kt/kh/items/it3-1.jpg" alt=""></a></div>
                                <div class="slider-assist"><img src="/images/slider_assist_4.3.png" alt=""></div>
                                <div class="slides-nav">
                                    <div class="slide-img">
                                        <ul class="img clearfix">
                                            <li style="left: 0px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it3-1.jpg" alt=""></a></li>
                                            <li style="left: 91px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it3-2.jpg" alt=""></a></li>
                                        </ul>

                                    </div>
                                    <div class="slide-img-assist">
                                        <img src="/images/prod/main-img-assist.png" alt="">
                                    </div>
                                    <div class="arrow">
                                        <a class="slide-prev inactive" href="javascript:;">Prev</a>
                                        <a class="slide-next inactive" href="javascript:;">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="spec clearfix">


                                <div class="spec-table">
                                    <table>
                                        <tr>
                                            <th>型號</th>
                                            <th>顏色</th>
                                            <th>尺寸</th>
                                            <th>微波爐使用</th>
                                            <th>洗碗機使用</th>
                                            <th>建議售價</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH009</th>
                                            <td>星紋盤(大）</td>
                                            <td>φ30 H8cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$18900</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH010</th>
                                            <td>星紋盤(中）</td>
                                            <td>φ15.5 H3cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$2690</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/kihara-%E5%88%9D%E6%9C%9F%E4%BC%8A%E8%90%AC%E9%87%8C%E6%A8%A3%E5%BC%8F" target="_blank">立即訂購</a>
                        </div>
                    </div>
                    <!-- <div id="ov-item4" class="ov-item">
                        <div class="clearfix">
                            <div class="intro">
                                <h4>Hana系列</h4>
                                <p>以自然界為靈感，用花草樣式勾勒出清新的線條。</p>
                                <p>搭配白瓷基底，呈現北歐式家居獨有的柔和氛圍。</p>
                                <p>花與草的交織，落腳餐桌；展演屬於自然獨有的溫潤色調。</p>
                            </div>
                            <div class="image-show">
                                <div class="slides btn-sp"><a type="gallery" href="javascript:;"><img src="/images/prod/kt/kh/items/it4-1.jpg" alt=""></a></div>
                                <div class="slider-assist"><img src="/images/slider_assist_4.3.png" alt=""></div>
                                <div class="slides-nav">
                                    <div class="slide-img">
                                        <ul class="img clearfix">

                                            <li style="left: 0px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it4-1.jpg" alt=""></a></li>
                                            <li style="left: 25px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it4-2.jpg" alt=""></a></li>
                                            <li style="left: 50px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it4-3.jpg" alt=""></a></li>
                                            <li style="left: 75px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it4-4.jpg" alt=""></a></li>
                                            <li style="left: 100px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it4-5.jpg" alt=""></a></li>
                                            <li style="left: 125px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it4-6.jpg" alt=""></a></li>
                                            <li style="left: 150px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it4-7.jpg" alt=""></a></li>
                                            <li style="left: 175px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it4-8.jpg" alt=""></a></li>
                                        </ul>

                                    </div>
                                    <div class="slide-img-assist">
                                        <img src="/images/prod/main-img-assist.png" alt="">
                                    </div>
                                    <div class="arrow">
                                        <a class="slide-prev inactive" href="javascript:;">Prev</a>
                                        <a class="slide-next" href="javascript:;">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="spec clearfix">

                                <div class="spec-table">
                                    <table>
                                        <tr>
                                            <th>型號</th>
                                            <th>顏色</th>
                                            <th>尺寸</th>
                                            <th>重量</th>
                                            <th>微波爐使用</th>
                                            <th>洗碗機使用</th>
                                            <th>建議售價</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH011</th>
                                            <td>杯 - 紅果實</td>
                                            <td>φ8 H7cm</td>
                                            <td>120g</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$990</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH012</th>
                                            <td>杯 - 葉子</td>
                                            <td>φ8 H7cm</td>
                                            <td>120g</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$990</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH013</th>
                                            <td>杯 - 藍花</td>
                                            <td>φ8 H7cm</td>
                                            <td>120g</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$990</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH014</th>
                                            <td>杯 - 果樹</td>
                                            <td>φ8 H7cm</td>
                                            <td>120g</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$990</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH015</th>
                                            <td>中盤 - 果實</td>
                                            <td>φ15 H2cm</td>
                                            <td>200g</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$1980</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH016</th>
                                            <td>中盤 - 葉子</td>
                                            <td>φ15 H2cm</td>
                                            <td>200g</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$1980</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH017</th>
                                            <td>橢圓盤（大） - 紅果實</td>
                                            <td>25.5×22 H3cm</td>
                                            <td>400g</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$2980</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH018</th>
                                            <td>橢圓盤（大） - 葉子</td>
                                            <td>25.5×22 H3cm</td>
                                            <td>400g</td>
                                            <td>可</td>
                                            <td>可</td>
                                            <td>$2980</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/kihara-hana%E7%B3%BB%E5%88%97" target="_blank">立即訂購</a>
                        </div>
                    </div> -->
                    <!-- <div id="ov-item5" class="ov-item">
                        <div class="clearfix">
                            <div class="intro">
                                <h4>古白磁系列</h4>
                                <p>素雅內斂的白色搭配簡約圖樣；</p>
                                <p>質樸的溫暖，整體透露出單純卻又不失優雅的氣質。</p>
                            </div>
                            <div class="image-show">
                                <div class="slides btn-sp"><a type="gallery" href="javascript:;"><img src="/images/prod/kt/kh/items/it5-1.jpg" alt=""></a></div>
                                <div class="slider-assist"><img src="/images/slider_assist_4.3.png" alt=""></div>
                                <div class="slides-nav">
                                    <div class="slide-img">
                                        <ul class="img clearfix">
                                            <li style="left: 0px;"><a href="javascript:;"><img src="/images/prod/kt/kh/items/it5-1.jpg" alt=""></a></li>
                                        </ul>

                                    </div>
                                    <div class="slide-img-assist">
                                        <img src="/images/prod/main-img-assist.png" alt="">
                                    </div>
                                    <div class="arrow">
                                        <a class="slide-prev inactive" href="javascript:;">Prev</a>
                                        <a class="slide-next inactive" href="javascript:;">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="spec clearfix">


                                <div class="spec-table">
                                    <table>
                                        <tr>
                                            <th>型號</th>
                                            <th>品名</th>
                                            <th>尺寸</th>
                                            <th>微波爐使用</th>
                                            <th>洗碗機使用</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH019</th>
                                            <td>四稜小皿　古白磁</td>
                                            <td>φ11 H2cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        
                                        
                                    </table>
                                </div>
                            </div>
                            <a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/kihara-%E5%8F%A4%E7%99%BD%E7%A3%81" target="_blank">立即訂購</a>
                        </div>
                    </div> -->
                    
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
    <?php include_once($root."/inc/overlay.inc"); ?>
</body>

</html>
