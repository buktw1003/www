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
    <title><?php echo "Home - ".$title;?></title>
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

<body class="lng-en">
    <header>
        <?php
        include_once($header);
        ?>

    </header>

    <main><div class="width-limiter">
        <section class="block-promo clearfix">
            <div class="slider">
                <ul class="img">
                    <?php
                        echo $indexSliders;
                    ?>
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
                <li><a href=""><img src="/images/index/it2.jpg" alt="Kitchen"></a></li>
                <li><a href=""><img src="/images/index/it3.jpg" alt="Home Decor"></a></li>
                <li><a href=""><img src="/images/index/it4.jpg" alt="Stationery"></a></li>
            </ul>
        </section>
        <section class="block-products">
            <h2 class="top-products">Top Products</h2>
            <div id="jollyheap" class="prod">
                <div class="intro-bar clearfix">
                    <h3 class="title">
                        <span class="prod-name">JollyHeap</span>
                        <span class="short-intro">Soft Magnetic Construction toy</span>
                    </h3>
                    <div class="btn-sp btn-video">
                        <a href="#" vid="intro1" type="video">INTRO 1</a>
                        <a href="#" vid="intro2" type="video">INTRO 2</a>
                    </div>
                    <div class="btn-detail"><a href="/<?php echo $lng;?>/prod/cm/jollyheap.html">DETAIL</a></div>
                </div>
                <div class="intro clearfix">
                    <div class="col-33 dk brief-intro">
                        <div class="intro-wrap clearfix">
                            <div class="img">
                                <img src="/images/prod/cm/jh/index/prod-1-1.jpg" alt="">
                            </div>
                            <div class="text v-center">
                                <h4>Brand new and unique product</h4>
                                <p>JollyHeap construction toy is not only safe and durable, it was designed so to develop a child's imagination and skills, logical and social.</p>
                                <p>Construction of different structures takes children's attention for a long period of time.</p>
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
                                        <h4>MAGNETISM</h4>
                                        <p>Comfortable attraction, easy connection, stability of the constructed structures.</p>
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
                                        <h4>LIGHTWEIGHT AND SOFTNESS</h4>
                                        <p>All components of the product are soft, pleasant, comfortable and big enough to grip.</p>
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
                                        <h4>SAFETY</h4>
                                        <p>JollyHeap blocks can’t cause any harm to children, because they are soft and don’t have sharp edges.</p>
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
                                        <h4>MULTIFUNCTIONALITY</h4>
                                        <p>A variety of structures: houses, cars, towers, furniture, etc. Build your dream!</p>
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
                                        <h4>QUIET IN THE FUN</h4>
                                        <p>Made of a soft material, that doesn’t make any noise. The only noise from the fun - is the children’s laugh!</p>
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
                                        <h4>DURABILITY AND USABILITY</h4>
                                        <p>Our blocks are made of a durable and safe material. JollyHeap will be interesting for children of all ages and their parents.</p>
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
