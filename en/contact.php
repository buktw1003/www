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
            <section class="block-figure short clearfix">
                <div class="img"><img src="/images/about.png" alt=""></div>
                <div class="text"></div>
            </section>
            <section class="block-info">
                <h2>Contact Us</h2>
                <table class="b-table resp-company-table">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <td>BUK International, Inc.</td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Founded</th>
                        <td>July 21, 2016</td>
                    </tr>
                        <tr>
                            <th>E-Mail</th>
                            <td>info@buk.com.tw</td>
                        </tr>
                        
                        <tr>
                            <th>Address</th>
                            <td>7F., No.79-8, Sec. 1, Xintai 5th Rd., Xizhi Dist., New Taipei City 22101, Taiwan, R.O.C.</td>
                        </tr>
                        <tr>
                            <th>Tel</th>
                            <td>+886-226981580</td>
                        </tr>
                        <tr>
                            <th>tax ID</th>
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
