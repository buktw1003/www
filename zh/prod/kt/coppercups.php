<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodName = "銅杯";
$prodSn = "ts";
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
                <div class="img"><img src="/images/prod/kt/<?php echo $prodSn ;?>/figure.jpg" alt=""></div>
                <!-- <div class="text onimg"></div> -->
            </section>
            <section class="prod-intro prod" id="kihara">
                <div class="top">
                    <div class="intro-bar clearfix">
                        <h2 class="title"><span class="prod-name">Tsubame Shinko</span><span class="short-intro">銅杯</span></h2>

                    </div>

                    <!-- /intro-bar -->
                    <div class="main-intro clearfix">
                        <div class="image-show">
                            <div class="slides"><img src="/images/prod/kt/<?php echo $prodSn ;?>/p1.jpg" alt=""></div>
                            <div class="slides-nav">
                                <div class="slide-img">
                                    <ul class="img clearfix">
                                        <?php
                                        include $root."/inc/prod/slideimgs/ts.inc";
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
                            <p>燕市。日本上越地區新瀉縣</p>
                            <p>一個從江戶時代就蓬勃發展金屬製造的百年都市<br/>
                            聚集了許多超過50年以上老經驗的專業職人<br/>
                            每一位工匠皆傳承了和風細膩文化的金匠魂</p>
                            <p>這款純銅手工杯，</p>
                            <p>每個敲痕都是由當地老師傅一錘錘用心敲打、琢磨<br/>
                            所產出的世上僅此一只的馬克杯</p>
                            <p>精緻厚實的手感，百分之百純銅、堅持手工、洗練的設計<br/>
                            讓每一口暢飲都表現出你的洒落（おしゃれ）</p><br/>
                           <p> 容量: 250 c.c./270 c.c.</p>
                           <p> 尺寸: 6.5cm(口徑)*10 cm(高)<br/>
                           7.0cm(口徑)*7.5cm(高)</p>
                           <p> 重量: 270g/330g</p>
                           <p> 材質: 純銅，杯內鍍錫，木頭</p>
                        </div>
                    </div>
                    <!-- /main-intro -->
                </div>
                <!-- /top -->
                <div class="content"></div>
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
    
</body>

</html>
