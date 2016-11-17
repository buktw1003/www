<?php
$lng = "zh";
?>
<div class="width-limiter">
    <div class="logo">
        <h1><a href="/zh/"><img src="/images/logo-zh.png" alt="Blumen und Katze"></a></h1>
    </div>
    <nav class="clearfix">
        <a href="javascript:;" class="switch mobile">menu</a>
        <ul class="menu clearfix">
            <li class="nav-new"><a href="/zh/index.php"><span>首頁</span><span class="bar"></span></a></li>
            <li class="nav-about"><a href="/zh/about.php"><span>關於我們</span><span class="bar"></span></a></li>
            <li class="nav-categories">
                <a href="#"><span>產品類別</span><span class="bar"></span></a>
                <div class="submenu">
                    <ul class="width-limiter clearfix">
                        <li class="leftside col-33">
                            <ul>
                                <li cat="cm"><a href="javascript:;">嬰童與母親<span class="bar"></span></a>
                                    <div class="submenu">
                                        <ul>
                                            <li><a href="/zh/prod/jollyheap.php">JollyHeap</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li cat="kt"><a href="javascript:;">廚房用品<span class="bar"></span></a></li>
                                <li cat="hd"><a href="javascript:;">家飾裝潢<span class="bar"></span></a></li>
                                <li cat="st"><a href="javascript:;">文具禮品<span class="bar"></span></a></li>
                            </ul>
                        </li>
                        <li class="rightside col-66">
                            <img src="/images/prod/cm/jh/cat-sub-1.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-shop"><a href="/zh/shopping.php"><span>線上購物</span><span class="bar"></span></a></li>
            <li class="nav-contact"><a href="/zh/contact.php"><span>聯絡我們</span><span class="bar"></span></a></li>
        </ul>
        <?php
            include_once("lng.inc");
        ?>
    </nav>
</div>
