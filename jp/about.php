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
    <main>
        <div class="width-limiter">
            <section class="block-figure short clearfix">
                <div class="img"><img src="/images/about.png" alt=""></div>
                <div class="text">
                </div>
            </section>
            <section class="block-info">
                <h3>ビジョン</h3>
                <ul>
                    <li>B.u.K. は、ドイツ、日本、中国、台湾にある国際貿易会社で、最高のサービスのための強力なネットワークを提供いたします。</li>
                    <li>私たちは、より良いものを楽しむという純粋な幸福が、地理的な境界、或いは言語によって制限されるべきではないと考えます。</li>
                    <li>したがって、私たちの使命は、お客様と我が社の専門家と長年の経験を持つスタッフを繋ぎ、質の良い製品を全世界に提供することです。</li>
                    <li>我々は、サプライヤーと長期的なパートナーシップを構築すること、相互利益に価値を付加する努力をすることをお約束いたします。</li>
                </ul>
                <h3>強み</h3>
                <ul>
                    <li><h4>国際調達チーム</h4>
                        <ul>
                            <li>- 製品の市場価値に対する鋭い感覚</li>
                            <li>- 材料品質に関する深い知識</li>
                            <li>- 知的財産権に対する高い敬意</li>
                        </ul>
                    </li>
                    <li><h4>資質の高い専門チーム</h4>
                        <ul>
                            <li>- 経験豊富なチームメンバー</li>
                            <li>- 商品一つひとつにプロダクトマネージャーを配置した、多様な商品のラインナップ</li>
                            <li>- リアルタイムで動くチームワークが特徴の、グローバルセールスチーム</li>
                        </ul>
                    </li>
                    <li><h4>販売、顧客サービス、国際的ビジネスに関するバックグラウンド</h4></li>
                    <li><h4>経験に富んだマーケティングの専門家</h4>
                        <ul>
                            <li>- 販売前/後の広範かつ綿密な市場調査</li>
                            <li>- 戦略的製品ポジショニングとブランディングの経験</li>
                            <li>- 持続可能な開発のための適切なアフターサービスプログラム</li>
                        </ul>
                    </li>
                    <li><h4>地元の流通チャネルとの堅固な繋がり</h4>
                        <ul>
                            <li>- 信頼できるさまざまなチャンネルタイプ</li>
                            <li>- タイムリーな市場情報へのアクセス</li>
                            <li>- 広範な提携による、成功性の高い開発</li>
                        </ul>
                    </li>
                </ul>
                <h3>計画と行動</h3>
                <ul>
                    <li><h4>代理店契約および詳細契約条件</h4></li>
                    <li>
                        <h4>市場の準備</h4>
                        <ul>
                            <li>- アジアにおける特許出願</li>
                            <li>- ライセンスを取得したメーカーによる現地生産</li>
                            <li>- 電子商取引のウェブサイトとのサプライチェーンネットワークの構築</li>
                        </ul>
                    </li>
                    <li>
                        <h4>市場調査</h4>
                        <ul>
                            <li>- 競争相手とターゲット顧客の特定</li>
                            <li>- 展示会や交渉を通じた地域の販売代理店の調査</li>
                            <li>- 明解な製品情報と独自のセールスポイント</li>
                        </ul>
                    </li>
                    <li>
                        <h4>市場への販売</h4>
                        <ul>
                            <li>- コマーシャルと広告による商品デビュー</li>
                            <li>- 異なる流通チャネルで製品を利用可能に</li>
                            <li>- 各段階における商品プロモーション</li>
                        </ul>
                    </li>
                    <li>
                        <h4>販売のモニタリングとマーケティング戦略の調整</h4>
                        <ul>
                            <li>- 購入後のアフターサービスとお客様第一プログラム</li>
                            <li>- 次世代製品シリーズにフィードバック</li>
                        </ul>
                    </li>
                </ul>
                <h3>究極の目標</h3>
                <p>市場における主要な製品の中にあって、お客様にユニークな製品を提供すること。</p>
                <p>我々は持続可能な相互利益を誓います。</p>
                <p>‘あなたの人生に、よりよいものを‘</p>
            </section>
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
