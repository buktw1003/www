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

<body class="lng-jp">
    <header>
        <?php
            include_once($header);
        ?>
    </header>
    <main><div class="width-limiter">
            <section class="block-figure short clearfix">
                <div class="img"><img src="/images/about.png" alt=""></div>
                <div class="text">
                </div>
            </section>
            <section class="block-info">
                <h2>Blumen und Katze</h2>
                <p>あなたに代わり、生活を鮮やかに彩る仲間達を運びます！</p>
                <p class="mb10">あなたの目になり、あなたに代わって地球の隅々まで素敵な生活スタイルを探し求めに行きます！</p><br/>
                <p>電子系会社の仕事に疲れ切った一匹の猫が、道端に咲いていた一輪の花に偶然出会い、冷たく冷えきった機械や部品を捨て去り、暖かいお家の懐に飛び込むことを決意しました。</p>
                <p>猫さんとお花さんがあなたの目になり足になり、世界の様々なところへ、面白い雑貨、家具、子ども用品を探しに出かけ、あなたの家をもっと素敵な、ときめくものに変えます。</p>
                <p>面白く、もっと魅力的な生活をお探しでしたら、是非私達と一緒に来てください。</p>
                <br/>
                <p>アジア独占代理 ポーランド Jolly Heapブロックセット</p>
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
