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
                <h2>About BUK</h2>
                <p>B.u.K. is an international company located in Germany, Japan, China,
                    <br/>which strong network contributes to the best services. </p>
                <p>We believe that the pure happiness of enjoying better things in life should not be restricted by geographical boundaries or languages. Therefore, our mission is to present designed-goods with quality to the world, connecting the suppliers to customers with our professionals and years’ experience.</p>
                <p>We promise to build long-term partnership with our suppliers, striving to add values to mutual benefits.</p>
                
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
