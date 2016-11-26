<?php
$css = '<link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/core.css?v=2">
        <link rel="stylesheet" href="/css/slider.css">
        <link rel="stylesheet" href="/css/m.css?v=2">
        <link rel="stylesheet" href="/css/prod/'.strtolower($prodName).'.css">';
$js = '<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
       <script src="/js/load.js"></script>
       <script src="/js/slider.js"></script>
       <script src="/js/main.js?v=2"></script>
       <script src="/js/index.js"></script>
       <script src="/js/prod/'.strtolower($prodName).'.js"></script>
       ';
$title = "Blumen und Katze";
$path = $_SERVER["SCRIPT_NAME"];
$lng = substr($path, 1,2);
?>
