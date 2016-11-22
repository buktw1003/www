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
    <title>Blumen und Katze</title>
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
    <main><div class="width-limiter">
            
            
            <!--/prod-intro-->
            <section class="prod-mall">
                <h3>線上購物</h3>
                <ul class="mall-list">
                    <li>
                        <a href="https://tw.search.bid.yahoo.com/search/auction/product?ei=utf-8&seller=Y3281589851&cat=&p=%E5%B8%83%E7%A9%8D%E6%9C%A8"><img src="/images/common/yahoobid.png" alt=""></a>
                    </li>
                    <li>
                        <a href="https://shopee.tw/shop/11241638/?tab=product"><img src="/images/common/shopee.png" alt=""></a>
                    </li>
                </ul>
                <h4>International customers?</h4>
                <p class="b-center">Please contact us by e-mail: <a href="mailto:info@buk.com.tw">info@buk.com.tw</a></p>
            </section>
        </div></main>
    <footer>
        <div class="width-limiter">
            <a class="btn-fb" href="https://www.facebook.com/Blumen-und-Katze-1074003162719945/?fref=ts" target="_blank">Facebook</a>
            <p>Copyright© 2016 Blumen und Katze. All rights reserved</p>
        </div>
    </footer>
</body>

</html>
