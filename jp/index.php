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
    <title><?php echo "ホーム - ".$title;?></title>
    <?php
    echo $css.$js;
    ?>
    
</head>
<body class="lng-jp">
    <header><?php
            include_once($header);
        ?></header>
    <main>
        <div class="width-limiter">
            <section class="block-promo clearfix">
                <div class="slider">
                    <ul class="img">
                        <li><a href=""><img src="/images/prod/cm/jh/banner/slider1.jpg" alt=""></a></li>
                        <li><a href=""><img src="/images/prod/cm/jh/banner/slider2.jpg" alt=""></a></li>
                        <li><a href=""><img src="/images/prod/cm/jh/banner/slider3.jpg" alt=""></a></li>
                        <li><a href=""><img src="/images/prod/cm/jh/banner/slider4.jpg" alt=""></a></li>
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
                        <h3><span class="short-intro">ソフト磁性建設のおもちゃ</span><span class="prod-name">JollyHeap</span></h3>
                        <div class="btn-sp btn-video">
                            <a href="#" vid="intro1">紹介動画 1</a>
                            <a href="#" vid="intro2">紹介動画 2</a>
                        </div>
                        <div class="btn-detail"><a href="/<?php echo $lng;?>/prod/jollyheap.php">詳細情報</a></div>
                    </div>
                    <div class="intro clearfix">
                        <div class="col-33 dk brief-intro">
                            <div class="intro-wrap clearfix">
                                <div class="img">
                                    <img src="/images/prod/cm/jh/index/prod-1-1.jpg" alt="">
                                </div>
                                <div class="text v-center">
                                    <h4>JollyHeap - Smart Cube<br/>お子様のために特別にデザインされた知育ツールです。</h4>
                                    <p>従来のブロックの遊び方の概念を覆し、smart cubeは新しいアイデアを生み出し、お子様に唯一無二の想像力と創造力を育ませ、遊びの中でお子様に粘り強く長時間集中させることを覚えることで、論理的思考力と社会力の発達を促します。</p>
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
                                            <h4>夢のつながり</h4>
                                            <p>Smart cubeには柔らかな磁石を内蔵、組み合わせが自由です。<br/>お子様の大脳と構築能力を夢でつなぎます。</p>
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
                                            <h4>軽くて楽しい</h4>
                                            <p>全てのブロックの重さが150ｇ以下。<br/>どの年齢のお子様も簡単に楽しんでいただけます。</p>
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
                                            <p>Smart cubeは全て、柔らかく、尖っていない材質にて製造されています。</p>
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
                                            <h4>マルチな活用法</h4>
                                            <p>単なる玩具やお子様のお城、自動車だけでなく、大人のソファ、コーヒーテーブル、腰掛にもなります。またお部屋のオブジェやインテリアーとしても最適です</p>
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
                                            <h4>静かで音なし</h4>
                                            <p>全ての材質が柔らかな素材でつくられており、遊びの最中に聞こえるのはお子様の笑い声だけ。ママにも嬉しい！</p>
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
                                            <h4>長持ち</h4>
                                            <p>全ての材料が厳選されたもので、マルチな活用ができ安心で長持ち。価値あるものをお届けします。</p>
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
        <?php include_once($root."/inc/overlay.inc"); ?>
    </body>

    </html>
