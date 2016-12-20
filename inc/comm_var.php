<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$path = $_SERVER["SCRIPT_NAME"];
$lng = substr($path, 1,2);
$prodCondition = "strpos($url,'prod') !== false";//if url has string 'prod'
if($prodCondition){
  $prodCss = '/css/prod/'.strtolower($prodCode).'.css';
  $prodJs = '/js/prod/'.strtolower($prodCode).'.js';
};

$css = '<link rel="stylesheet" href="/css/bootstrap.min.css?v=20161217">
        <link rel="stylesheet" href="/css/reset.css?v=20161217">
        <link rel="stylesheet" href="/css/core.css?v=20161217">
        <link rel="stylesheet" href="/css/slider.css?v=20161217">
        <link rel="stylesheet" href="/css/m.css?v=20161217">';
        //if($prodCondition && file_exists($root.$prodCss)){
          $css .= '<link rel="stylesheet" href="'.$prodCss.'">';
        //};
$js = '<script src="https://code.jquery.com/jquery-3.1.1.js?v=20161217"></script>
       <script src="/js/load.js?v=20161217"></script>
       <script src="/js/slider.js?v=20161217"></script>
       <script src="/js/main.js?v=20161217"></script>
       <script src="/js/index.js"></script>';
       if(strpos($url,'prod') !== false){
          $js .= '<script src="/js/prod.js?v=2"></script>';
          if(file_exists($root.$prodJs)){
            $js .= '<script src="/js/prod/'.strtolower($prodCode).'.js"></script>';
          };
       };
$title = "Blumen und Katze";
if($lng == "zh"){
  $title = "Blumen und Katze 比悠客國際股份有限公司";
}
$header = $root."/inc/header_".$lng.".php";
$bukShopUrl = "http://buk1003.shoplineapp.com/categories/%E6%89%80%E6%9C%89%E5%95%86%E5%93%81?&locale=zh-hant";
$indexSliders = '
                <li><a href="/'.$lng.'/prod/cm/jh/prod.php"><img src="/images/prod/cm/jh/banner/slider1.jpg" alt=""></a></li>
                <li><a href="/'.$lng.'/prod/cm/jh/prod.php"><img src="/images/prod/cm/jh/banner/slider2.jpg" alt=""></a></li>
                <li><a href="/'.$lng.'/prod/cm/jh/prod.php"><img src="/images/prod/cm/jh/banner/slider3.jpg" alt=""></a></li>
                <li><a href="/'.$lng.'/prod/cm/jh/prod.php"><img src="/images/prod/cm/jh/banner/slider4.jpg" alt=""></a></li>
                <li><a href="/'.$lng.'/prod/cm/jh/prod.php"><img src="/images/prod/kt/kh/banner/slider1.jpg" alt=""></a></li>
                ';
if($lng == "zh"){
    $fbLink = "https://www.facebook.com/blumenundkatze/";
} elseif ($lng == "jp"){
    $fbLink = "https://www.facebook.com/Blumen-und-Katze-Japan-1214712065283831/?fref=ts";
};
?>
