
<div class="width-limiter">
    <div class="logo">
        <h1><a href="/<?php echo "$lng";?>/"><img src="/images/logo.png" alt="Blumen und Katze"></a></h1>
    </div>
    <nav class="clearfix">
        <a href="javascript:;" class="switch mobile">menu</a>
        <ul class="menu clearfix">
            <li class="nav-new"><a href="/<?php echo "$lng";?>/"><span>ホーム</span><span class="bar"></span></a></li>
            <li class="nav-about"><a href="/<?php echo "$lng";?>/about.php"><span>BUKについて</span><span class="bar"></span></a></li>
            <li class="nav-categories">
                <a href="#"><span>カテゴリ</span><span class="bar"></span></a>
                <div class="submenu">
                    <ul class="width-limiter clearfix">
                        <li class="leftside col-33">
                            <ul class="sub-1">
                                <li cat="cm"><a href="javascript:;">子ども・マタニティ<span class="bar"></span></a><div class="submenu">
                                    <ul class="sub-2">
                                        <li class="prod" prodname="jh"><a href="/<?php echo "$lng";?>/prod/jollyheap.php">JollyHeap</a></li>
                                    </ul>
                                </div></li>
                                <li cat="kt"><a href="javascript:;">キッチン<span class="bar"></span></a></li>
                                <li cat="hd"><a href="javascript:;">室内装飾<span class="bar"></span></a></li>
                                <li cat="st"><a href="javascript:;">文具<span class="bar"></span></a></li>
                            </ul>
                        </li>
                        <li class="rightside col-66">
                            <img src="/images/prod/cm/jh/cat-sub-1.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-shop"><a href="/<?php echo "$lng";?>/shopping.php"><span>オンラインショップ</span><span class="bar"></span></a></li>
            <li class="nav-contact"><a href="/<?php echo "$lng";?>/contact.php"><span>お問い合わせ</span><span class="bar"></span></a></li>
        </ul>
        <?php
            include_once("lng.inc");
        ?>
    </nav>
</div>
