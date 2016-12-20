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
                        <h2 class="title"><span class="prod-name">KIHARA</span><span class="short-intro">瓷器</span></h2>

                    </div>

                    <!-- /intro-bar -->
                    <div class="main-intro clearfix">
                        <div class="image-show">
                            <div class="slides btn-sp"><a type="gallery" href="javascript:;"><img src="/images/prod/kt/<?php echo $prodSn ;?>/p1.jpg" alt=""></a></div>
                            <div class="slider-assist"><img src="/images/slider_assist_4.3.png" alt=""></div>
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
                            <h3>有田・波佐見の伝統産業を未来へつなぐ</h3>
                            <p>1616年、日本で初めて磁器生産を始めた有田。</p>
                            <p>株式会社キハラは、有田焼・波佐見焼の産地商社として、この400年の伝統技術と先人たちの想いを胸に、現代の生活に合わせた商品開発を行い、末永く愛される器をお届けします。</p>
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
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it1.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">鍋島様式  髙橋正</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="#ov-item2" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it2.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">古伊万里様式 金襴手</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="#ov-item3" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it3.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 77.75px;">
                                        <span class="title">初期伊万里様式 佐藤晃一</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="#ov-item4" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it4.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 77.75px;">
                                        <span class="title">KIHARA - HANA</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col-xs-4">
                                <a href="#ov-item5" type="item">
                                    <span class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/items/it5.jpg" alt=""></span>
                                    <span class="text v-center" style="top: 65.75px;">
                                        <span class="title">KIHARA - 古白磁</span>
                                    </span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div id="ov-item1" class="ov-item">
                        <div class="clearfix">
                            <div class="intro">

                                <h4>鍋島樣式</h4>
                                
                                <p>有田焼は、「初期伊万里様式」「柿右衛門様式」「鍋島様式」「古伊万里様式」と四つの代表的な様式に分類され、これらの様式を表現するには、いくつか守らなければならない決まりごとがあります。</p>
                                <p>この限られた条件の中で新たな有田焼の創出に挑んだのが、有田HOUENサーフェスデザイナー「永井一正」「佐藤晃一」「吉澤美香」「高橋正」の4人です。</p>
                                <p>伝統の四様式とデザインを掛け合わせ、新と旧を融合させたのが「有田四様」です。</p>

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
                                            <th>品番</th>
                                            <th>パタン・カラー</th>
                                            <th>サイズ</th>
                                            <th>重量子レンジ</th>
                                            <th>■食洗機</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH001</th>
                                            <td>皿　つばめ紋</td>
                                            <td>φ30 H7cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH002</th>
                                            <td>大皿　椿紋</td>
                                            <td>φ30 H7cm</td>
                                            <td>可</td>
                                            <td>不可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH003</th>
                                            <td>取皿　つばめ紋</td>
                                            <td>φ15 H3cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH004</th>
                                            <td>取皿　椿紋</td>
                                            <td>φ15 H3cm</td>
                                            <td>可</td>
                                            <td>不可</td>
                                        </tr>

                                    </table>
                                    <p>*職人がひとつひとつ手作業で仕上げているため、画像と実物の色合いや柄の配置が若干異なることがございます。手仕事ならではの表情をお愉しみ頂ければ幸いです。</p>
                                </div>
                            </div>
                            <a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/kihara-%E9%8D%8B%E5%B3%B6%E6%A7%98%E5%BC%8F" target="_blank">立即訂購</a>
                        </div>
                    </div>
                    <div id="ov-item2" class="ov-item" class="">
                        <div class="clearfix">
                            <div class="intro">

                                <h4>古伊萬里樣式 - 金襴手</h4>
                                <p>このシリーズは、伊万里・有田の系譜のひとつである金襴手古伊万里様式を踏まえながら現代の焼物を製作するという試みだ。</p>
                                <p>この様式はその名が示す通り、金彩を絢爛豪華で江戸元禄のルネッサンスを彩ったバロック・ロココ的な焼物である。</p>
                                <p>日本では「侘び」「寂び」といった簡素な美と歌舞伎のような豪華絢爛な世界がある。</p>
                                <p>この対照的な存在が日本の美の広さであると思う。</p>
                                <p>近代デザインは過剰な美を排除してきたが私は日本が元来もってきた絢爛としたエネルギーをデザインのなかに生かそうとしてきた。</p>
                                <p>様式を伝承しながらも現代の生活の中で調和しながら息づくデザインを考えてみた。</p>
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
                                            <th>品番</th>
                                            <th>パタン・カラー</th>
                                            <th>サイズ</th>
                                            <th>重量子レンジ</th>
                                            <th>■食洗機</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH005</th>
                                            <td>大皿　鷹紋</td>
                                            <td>φ30 H4cm</td>
                                            <td>不可</td>
                                            <td>不可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH006</th>
                                            <td>取皿　鷹紋</td>
                                            <td>φ14.5 H2.5cm</td>
                                            <td>不可</td>
                                            <td>不可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH007</th>
                                            <td>そば猪口　鷹紋</td>
                                            <td>φ7.8 H6cm</td>
                                            <td>不可</td>
                                            <td>不可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH008</th>
                                            <td>大皿　金襴手古伊万里金魚紋</td>
                                            <td>φ36.5 H5cm</td>
                                            <td>不可</td>
                                            <td>不可</td>
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
                                <p>私が担当したのは「初期伊万里様式」で、17世紀前半の有田焼の最も古く素朴なものである。</p>
                                <p>そのポッテリと暖かみのある地肌の風合いは磁器としては今日見られないものでもあり染付による紋様はどうしても現代のものにならざる得ないので、ぜひ肌合いを再現したいと何度もテストをしてもらった。</p>
                                <p>しかし今日の生産ラインの中では昔の登り窯と同じ味はやはり無理という結果になった。</p>
                                <p>なかなかむずかしいものである。</p>
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
                                            <th>品番</th>
                                            <th>パタン・カラー</th>
                                            <th>サイズ</th>
                                            <th>重量子レンジ</th>
                                            <th>■食洗機</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH009</th>
                                            <td>大鉢　星紋</td>
                                            <td>φ30 H8cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH010</th>
                                            <td>取皿　星紋</td>
                                            <td>φ15.5 H3cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/kihara-%E5%88%9D%E6%9C%9F%E4%BC%8A%E8%90%AC%E9%87%8C%E6%A8%A3%E5%BC%8F" target="_blank">立即訂購</a>
                        </div>
                    </div>
                    <div id="ov-item4" class="ov-item">
                        <div class="clearfix">
                            <div class="intro">
                                <h4>Hana</h4>
                                <p>自然界をモチーフにした模様の中で古来より数多くの器のデザインに採用されている花模様をモダンにアレンジした器です。</p>
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
                                            <th>品番</th>
                                            <th>パタン・カラー</th>
                                            <th>サイズ</th>
                                            <th>重量</th>
                                            <th>■電子レンジ</th>
                                            <th>■食洗機</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH011</th>
                                            <td>カップ　赤の実</td>
                                            <td>φ8 H7cm</td>
                                            <td>120g</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH012</th>
                                            <td>カップ　リーフ</td>
                                            <td>φ8 H7cm</td>
                                            <td>120g</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH013</th>
                                            <td>カップ　青い花</td>
                                            <td>φ8 H7cm</td>
                                            <td>120g</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH014</th>
                                            <td>カップ　果樹</td>
                                            <td>φ8 H7cm</td>
                                            <td>120g</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH015</th>
                                            <td>取皿　赤の実</td>
                                            <td>φ15 H2cm</td>
                                            <td>200g</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH016</th>
                                            <td>取皿　リーフ</td>
                                            <td>φ15 H2cm</td>
                                            <td>200g</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH017</th>
                                            <td>楕円皿(大)　赤の実</td>
                                            <td>25.5×22 H3cm</td>
                                            <td>400g</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH018</th>
                                            <td>楕円皿(大)　リーフ</td>
                                            <td>25.5×22 H3cm</td>
                                            <td>400g</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/kihara-hana%E7%B3%BB%E5%88%97" target="_blank">立即訂購</a>
                        </div>
                    </div>
                    <div id="ov-item5" class="ov-item">
                        <div class="clearfix">
                            <div class="intro">
                                <h4>古白磁</h4>
                                <p>1616年～1650年代に焼かれた有田焼のことを「初期伊万里」といいます。</p>
                                <p>有田焼の完成期より半世紀ほど前のこの頃のものは、素地・絵付ともに自由で勢いのあるものが多く、温かみに加えて味わいがあります。</p>
                                <p>このシリーズは「初期伊万里」が持つ素朴で趣のある特徴を再現した器です。</p>                                
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
                                            <th>品番</th>
                                            <th>品名</th>
                                            <th>サイズ</th>
                                            <th>重量子レンジ</th>
                                            <th>■食洗機</th>
                                        </tr>
                                        <tr>
                                            <th>KT-KH019</th>
                                            <td>四稜小皿　古白磁</td>
                                            <td>φ11 H2cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH020</th>
                                            <td>四稜小皿　草花</td>
                                            <td>φ11 H2cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                        <tr>
                                            <th>KT-KH021</th>
                                            <td>四稜小皿　水玉</td>
                                            <td>φ11 H2cm</td>
                                            <td>可</td>
                                            <td>可</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a class="btn-shop" href="http://buk1003.shoplineapp.com/categories/kihara-%E5%8F%A4%E7%99%BD%E7%A3%81" target="_blank">立即訂購</a>
                        </div>
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
