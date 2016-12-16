<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<?php 
$prodName = "TAMAMONO";
$root = $_SERVER['DOCUMENT_ROOT'];
$commVar = $root."/inc/comm_var.php";
include_once($commVar);
$header = $root."/inc/header_".$lng.".php";
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $prodName." < 嬰童與母親 - ".$title;?></title>
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
                <div class="img"><img src="/images/prod/cm/tm/figure.jpg" alt=""></div>
                <div class="text onimg">
                    <p class="left">溫柔守護，來自一個身為母親最真切的願望。</p>
                    <p class="right">TAMAMONO，充滿母愛的寶寶用品，將母親的溫柔守護穿在身上。</p>
                </div>
            </section>
            <section class="prod-intro prod" id="tamamono">
                <div class="top">
                    <div class="intro-bar clearfix">
                        <h2 class="title"><span class="short-intro">寶寶蠶絲衣</span><span class="prod-name">TAMAMONO</span></h2>
                    </div>
                    <!-- /intro-bar -->
                    <div class="intro-text">
                        <div class="main-intro clearfix">
                            <div class="image-show">
                                <div class="slides"><img src="/images/prod/cm/tm/p1.jpg" alt=""></div>
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
                                <h3>TAMAMONO，溫柔守護，來自一個身為母親最真切的願望。</h3>
                                <p>為了讓寶寶可以每天使用乾淨的蠶絲貼身衣物，<br/>
                                    我們開發了可機洗蠶絲衣，即使丟進洗衣機、烘乾機也不變形，依然保有蠶絲的柔軟質感。<br/>
                                    我們採用全程日本加工製造的SHIDORI®絲線。<br/>
                                    多道工序費時生產，確保製作出made in japan的高品質。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="tabs">
                        <ul class="tablist clearfix">
                            <li><a href="javascript:void(0);">Introduction</a></li>
                            <li><a href="javascript:void(0);">Collection</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="section">
                                <h3>＝「TAMAMONO」 契機・轉折・誕生 ＝</h3>
                                <h4>契機 – 一個被蠶絲拯救的異味性皮膚炎患者</h4>
                                <p>
                                    用蠶絲來製作貼身衣物的契機，是來自公司代表加藤在幼兒及青春期時的異位性皮膚炎經歷。在試過各種治療方式及改變生活習慣仍不見改善後，她發現最重要的就是那件最貼近身上的貼身衣物。既使穿上材質柔軟的棉製衣物，在手肘活動時仍會產生摩擦導致肌膚紅腫發炎發癢，不斷惡性循環發炎-抓癢-破皮。<br/>
                                    就在加藤社長成長的過程中，惱人的異位性皮膚炎也漸漸地改善。豈料懷第二胎時症狀再度惡化，當時便是靠著蠶絲製品順利渡過那段孕期。在孩子出生後，希望也能讓強褓中的嬰兒體會這股舒適感，便興起了用蠶絲製作嬰兒服的念頭。但是蠶絲製品在洗滌方面相對複雜、價位也較高，該克服這個障礙呢？
                                </p>
                                <h4>與SHIDORI®的相遇</h4>
                                <p>一年半前，elegrance的主要商品是主婦用圍裙的販賣，主要開發目前市面上所沒有的高級圍裙。從設計、花色設計、材質挑選都一手包辦。也因此接處到了由山嘉精練開發出的新產品SHIDORI®。由SHIDORI®所製造出的蠶絲布料，能夠像棉製及化學纖維製品一樣放入洗衣機清洗，我們嗅到了另一種可能，於是便著手與山嘉精練聯繫。</p>
                                <h4>縫製</h4>
                                <p>「TAMAMONO」的製作，因為是要給嬰兒使用的產品，我們堅持要由經驗豐富、專門製作嬰兒用品、符合無甲醛規定的工廠製作。拜訪十多間工廠，不是不做嬰兒用品，就是不製作絲製品或是產線無法配合等等。其中一間爽快答應的就是目前委製的奈良工廠；由場內專業的職人一針一線用心的縫製。</p>
                                <h4>媽媽想要的 我們都知道</h4>
                                <p>「TAMAMONO」的誕生，出發點完全是為了讓我的孩子穿到百分之百由天然素材製作的衣物。產品設計出後的半年之間，不斷反覆的修改、製作，終於成為一件比棉製品更溫柔、更耐穿、尺寸更靈活的寶寶貼身衣物。
                                    但是一般產衣最多不過穿半年，就算是可久穿的蠶絲產衣也一樣。因此我們設計了這款一件從0歲~5歲都可使用的寶寶衣。
                                    這件寶寶衣原本是讓新生的二女兒使用的產衣，因一次讓長女試穿時無心插柳將他設計成0~5遂皆可使用的寶寶貼身衣物。今後我們也將開發更多更耐穿的產品！
                                </p>
                            </div>
                            <!-- /section -->
                            <div class="section">
                                <h3>＝「TAMAMONO」寶寶蠶絲衣的未來＝</h3>
                                <p>如同先前所提，日本在絲製品的加工技術上因為需求銳減、專業人員高齡化、夕陽產業等問題，讓絲製品這種產期及加工需要較長作業時間的產業顯得更加珍貴。雖然絲製品產業走下坡的原因很多，但其中一個重要的原因，就是絲製品離給一般人的印象是高貴不可及、離日常生活太遠，難以接觸。</p>
                                <p>
                                    為了突破這個困境，SHIDORI®將傳統與先進技術結合，重新展現了絲製品獨特的光採，冀望能將絲製品再次帶入日常生活。「保留傳統的骨幹，以使用者的角度為立場出發，發展出適合現代生活的絲製品是我的目標。」elegrance是被山嘉精練的山內社長這番話感動的。但發展技術層面之餘，還是要將技術帶入商品裡才能融入社會大眾的生活。elegrance的角色就是將山內社長的使命和使用者連接起來的橋樑。
                                    從圍裙事業到將這款特別的絲製品相遇、並呈現在世人眼前，期間的辛苦不言可諭，但elegrance卻有著一股“非我不可”的使命感。不只針對材質的特殊性開發新產品、尋找更多新的合作夥伴，目前更重要的是如何保存這獨有的技術，並且讓他長遠的發展下去是我們的目標之一。
                                </p>
                            </div>
                            <div class="section">
                                <h3>不只舒適 - 關於蠶絲的九大優點</h3>

                                <div class="img b-center">
                                    <img src="/images/prod/cm/tm/silk_features.png" alt="">
                                </div>
                                <ol>
                                    <li>
                                        <h4>滑順觸感</h4>
                                        <p>纖維內部特殊纖細且均一的三角構成，造就獨特的光澤和柔軟。 獨特的光澤和柔順，溫暖您每一寸寶貝的肌膚。</p>
                                    </li>
                                    <li>
                                        <h4>「溫柔觸感」</h4>
                                        <p>富含18種氨基酸，最接近肌膚構成的天然纖維，不易造成肌膚過敏，完全安心使用。</p>
                                    </li>
                                    <li>
                                        <h4>「不起灰塵」</h4>
                                        <p>絲製品特有的吸濕性，不易經由摩擦產生電荷產生靜電，因此不會產生灰塵，有效預防過敏及氣喘。</p>
                                    </li>
                                    <li>
                                        <h4>「防臭除臭效果」</h4>
                                        <p>絲製品纖維不利細菌繁殖，能有有效保持肌膚健康狀態，同時達到除臭防臭的效果。</p>
                                    </li>
                                    <li>
                                        <h4>「吸濕・排汗」</h4>
                                        <p>優於棉的1.3的吸水力、1.5倍的排汗性，能夠有效的排出多餘的汗水，在多汗的季節也能保持身上乾爽。</p>
                                    </li>
                                    <li>
                                        <h4>「保溫力」</h4>
                                        <p>絲線的纖維與纖維之間有充分的空間，能夠將體溫保持在空隙中，達到保溫效果。</p>
                                    </li>
                                    <li>
                                        <h4>「美肌效果」</h4>
                                        <p>絲製品含多種天然氨基酸，貼身接觸肌膚能夠保持肌膚濕度，遠離乾燥。</p>
                                    </li>
                                    <li>
                                        <h4>「安全性」</h4>
                                        <p>絲製品與棉、毛相比強度更高，與化學纖維相比更是耐燃，是相當安全的天然材質。</p>
                                    </li>
                                    <li>
                                        <h4>「抗UV」</h4>
                                        <p>富含蛋白質・氨基酸，能有抵抗紫外線。</p>
                                    </li>
                                </ol>
                            </div>
                            <!-- /section -->
                        </div>
                        <!-- /tab-content -->
                        <div class="tab-content">
                            <div class="section">
                                <p class="b-center">TAMAMONO特別訂製較厚實的布料，我們堅持採用特別的編織法，增加了布料的厚度，讓新生兒能夠被這款珍貴的布料牢牢的環抱、更適合拿來當作餽贈新生兒的禮物。</p>
                                <div class="items">
                                    <ul class="row btn-sp">
                                        <li class="col-xs-4">
                                            <a href="javascript:;" type="item">
                                                <span class="img"><img src="/images/prod/cm/tm/items/it1.jpg" alt=""></span>
                                                <span class="text v-center">
                                                    <span class="title">
                                                        <span>100%蠶絲</span><span>寶寶手套</span>
                                                    </span>
                                                    <span class="intro">用與肌膚組成最接近的天然纖維—絲守護寶寶纖細的新生肌膚。</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="col-xs-4">
                                            <a href="javascript:;" type="item">
                                                <span class="img"><img src="/images/prod/cm/tm/items/it2.jpg" alt=""></span>
                                                <span class="text v-center">
                                                    <span class="title">
                                                        <span>100%</span><span>蠶絲包巾</span>
                                                    </span>
                                                    <span class="intro">TAMAMONO寶寶包巾是一款讓新生兒放心，更是一款讓媽媽們安心的產品。</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="col-xs-4">
                                            <a href="javascript:;" type="item">
                                                <span class="img"><img src="/images/prod/cm/tm/items/it3.jpg" alt=""></span>
                                                <span class="text v-center">
                                                    <span class="title">
                                                        <span>100%</span><span>蠶絲寶寶衣</span>
                                                    </span>
                                                    <span class="intro">可機洗的蠶絲貼身衣物</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section">
                                <p>我們希望不單單是產出一件商品，還冀望能將絲製品的優點、文化歷史、產業的展望結合再一起，當作送給下一代的禮物。因此我們特別請到京都和紙老店製作精美外盒，將這份傳承今昔的大禮包裝在內。</p>
                                <p>使用全球獨家技術山嘉精練SHIDORI®原料，不以silicon coating工法製做的原紗製成布料。不挑洗劑、不挑洗法，讓每個家庭都能輕輕鬆鬆使用洗衣機做清潔。</p>
                                <ul>
                                    <li>※魔鬼氈或扣具恐有傷害衣料之虞，投入機洗前請放入專用洗衣袋以免損傷布料。</li>
                                    <li>※清洗後請一般室外陰乾即可。</li>
                                    <li>※請勿使用漂白水及註明不可清洗蠶絲製品之洗劑。</li>
                                </ul>
                            </div>                            
                            <!-- /section -->
                        </div>
                        <!-- /tab-content -->
                    </div>

                </div>
                <!-- /content -->
            </section>
            <!--/prod-intro-->
            <!-- <section class="prod-mall">
                <h3>いますぐ注文します</h3>
                <ul class="mall-list">
                    <li>
                        <a href="https://tw.search.bid.yahoo.com/search/auction/product?ei=utf-8&seller=Y3281589851&cat=&p=%E5%B8%83%E7%A9%8D%E6%9C%A8"><img src="/images/common/yahoobid.png" alt=""></a>
                    </li>
                    <li>
                        <a href="https://shopee.tw/shop/11241638/?tab=product"><img src="/images/common/shopee.png" alt=""></a>
                    </li>
                </ul>
            </section> -->
        </div>
    </main>
    <footer>
        <div class="width-limiter">
            <a class="btn-fb" href="https://www.facebook.com/Blumen-und-Katze-1074003162719945/?fref=ts" target="_blank">Facebook</a>
            <p>Copyright© 2016 Blumen und Katze. All rights reserved</p>
        </div>
    </footer>
    <?php include_once($root."/inc/prod/tamamono_overlay.inc"); ?>
</body>
</html>
