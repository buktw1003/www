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
<body class="lng-cn">
    <header>
        <?php
            include_once($header);
        ?>
    </header>
    <main><div class="width-limiter">
            <section class="block-figure short clearfix">
                <div class="img"><img src="/images/about.png" alt=""></div>
                <div class="text"></div>
            </section>
            <section class="block-info">
                <h2>联络我们</h2>
                <table class="b-table resp-company-table">
                    <thead>
                        <tr>
                            <th>公司名称</th>
                            <td>比悠客国际股份有限公司(BUK International, Inc.)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>设立日期</th>
                            <td>2016年7月21日</td>
                        </tr>
                        <tr>
                            <th>电子邮件</th>
                            <td>info@buk.com.tw</td>
                        </tr>
                        <tr>
                            <th>公司地址</th>
                            <td>新北市汐止区新台五路一段79号7楼之8</td>
                        </tr>
                        <tr>
                            <th>公司电话</th>
                            <td>02-26981580</td>
                        </tr>
                        <tr>
                            <th>统一编号</th>
                            <td>47091234</td>
                        </tr>
                    </tbody>
                </table>
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
