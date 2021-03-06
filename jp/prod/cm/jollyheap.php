<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodName = "JollyHeap";
$root = $_SERVER['DOCUMENT_ROOT'];
$commVar = $root."/inc/comm_var.php";
include_once($commVar);
$header = $root."/inc/header_".$lng.".php";
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $prodName." < 子ども・マタニティ - ".$title;?></title>
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
                <div class="img"><img src="/images/prod/cm/jh/figure.jpg" alt=""></div>
                <div class="text onimg">
                    <h3>Jollyheap smart cubeはお子様のために特別にデザインされた知育ツールです。</h3>
                    <p>
                        従来のブロックの遊び方の概念を覆し、smart cubeは新しいアイデアを生み出し、<br/>
                        お子様に唯一無二の想像力と創造力を育ませ、<br/>
                        遊びの中でお子様に粘り強く長時間集中させることを覚えることで、<br/>
                        論理的思考力と社会力の発達を促します。
                    </p>
                </div>
            </section>
            <section class="prod-intro prod" id="jollyheap">
                <div class="top">
                    <div class="intro-bar clearfix">
                        <h2 class="title"><span class="short-intro">磁性布積木</span><span class="prod-name">JollyHeap</span></h2>
                        <div class="btn-sp btn-video">
                            <a href="#" vid="intro1" type="video">紹介動画 1</a>
                            <a href="#" vid="intro2" type="video">紹介動画 2</a>
                        </div>
                    </div>
                    <!-- /intro-bar -->
                    <div class="intro-text">
                        <div class="main-intro clearfix">
                            <div class="image-show">
                                <div class="slides"><img src="/images/prod/cm/jh/p1.jpg" alt=""></div>
                                <div class="slides-nav">
                                    <div class="slide-img">
                                        <ul class="img clearfix">
                                            <?php
                                                include_once($root."/inc/prod/slideimgs/".strtolower($prodName).".inc");
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
                                <h3>多様な機能を持つJollyheap ブロックセットはお子様に以下の力をもたらします。</h3>
                                <ul class="features clearfix">
                                    <li>3D立体概念の構築</li>
                                    <li>視覚・触覚の機能促進</li>
                                    <li>論理的思考力</li>
                                    <li>アイデアを創造する力</li>
                                    <li>対人コミュニケーション力</li>
                                </ul>
                                <p class="right_40">Smart cubeブロックセットは単なる玩具ではなく、同時に教育の側面をも持ち合わせています。Smart cube はお子様の能力を開花させ、お子様とともに成長し、視覚触覚の機能を促進させ、空間や物的概念、集中力、論理的思考力などを育成する他様々なメリットがあります。是非それをご自身で体験し発見していただきたいと思っております。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row-container top">
                        <div class="row">
                            <div class="col-xs-4">
                                <h3>遊びによるお子様たちの創造力と創造力の開発</h3>
                                <p>赤ちゃんや幼いお子様たちは何を通じて世界とつながり、関わり合い、世界を認識しているのでしょうか？答えはその両手です。体を動かして、ブロックを積み上げたり組み合わせを楽しんだりすることで筋力のトレーニングにもなります。それは幼少期において骨格や視覚、運動能力を育むことができますそれだけではなく、Jollyheap Smart Cubeブロックセットは、遊びを通じて子供の構築能力や感知能力を高めます。</p>
                            </div>
                            <div class="col-xs-4">
                                <h3>考える脳を作る、空間構築能力の育成</h3>
                                <p>視覚運動能力の他に、空間構築も早期幼児教育の重要なポイントの一つです。遊びの中で、どのようすればお子様達の想像力と創造力を促進させることができるでしょうか？その答えはずばり、ブロックです。遊んでいる最中のお子様に、どのようにして問題を発見させ、それを解決する思考力を育ませれば良いのでしょうか？その答えもやっぱりブロックです。Jollyheap Smart cubeはお子様に冒険をさせ、無限の可能性と想像力の育成を手助けしてくれます。安全で大きなサイズのブロックのJollyheap Smart cubeは社会適応能力育成のためのツールにもなるといえます。
                                </p>
                            </div>
                            <div class="col-xs-4">
                                <h3>遊びながら楽しく学ぼう！</h3>
                                <p>Jollyheap ブロックセットは、ブロックを組み合わせることで、子供達に色彩や形、磁力、論理などの概念を学ばせることができます。それだけではなく、ブロックを組み立てたり崩したりすることで、二次元三次元空間の概念の構築や、視覚運動能力までも開花することができます。更に、ブロックを様々に組み合わせることを通して、仲間とのコミュニケーション力を育み、幼いうちからチームワークの考えを子供に植え付けることができます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-container">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="/images/prod/cm/jh/photo-2.jpg" alt="Magnetic Toys">
                            </div>
                            <div class="col-sm-6">
                                <h3>４種類の形、無限大の組み合わせ</h3>
                                <p>Smart cubeは4種類の異なる形状のブロックの組み合わせから構成されており、内部には安全な特殊磁石が埋め込まれております。組み合わせで多様な組み合わせ方が可能になっており、無限大に可能な組み合わせは、お子様の二次元三次元の空間概念を育くみます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="gray row-container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>多様なカラー</h3>
                                <p>基本的な構成は２色からなっております。</p>
                                <p>子供の目に鮮やかで多様な色彩が、お子様の配色能力を育みます。</p>
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <img src="/images/prod/cm/jh/photo-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row-container">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="/images/prod/cm/jh/photo-4.jpg" alt="JollyHeap Toys" class="coub">
                            </div>
                            <div class="col-sm-6">
                                <br>
                                <h3>ＥＵ認証、品質管理チェック</h3>
                                <p>全てのSmart CubeはＥＵの規格認証を取得しており、お父様お母様も安心してお子様に遊ばせることができます。</p>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /content -->
            </section>
            <!--/prod-intro-->
            
        </div>
    </main>
    <footer>
        <div class="width-limiter">
            <a class="btn-fb" href="https://www.facebook.com/Blumen-und-Katze-1074003162719945/?fref=ts" target="_blank">Facebook</a>
            <p>Copyright© 2016 Blumen und Katze. All rights reserved</p>
        </div>
    </footer>
    <?php include_once($root."/inc/prod/".$prodName.".inc"); ?>
    <?php include_once($root."/inc/overlay.inc"); ?>
</body>
</html>
