<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Blumen und Katze</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/core.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>

<body>
<?php
$ip = $_SERVER["REMOTE_ADDR"];
$path = $_SERVER["SCRIPT_FILENAME"];
$char = substr("ABCDE", 0, 2);
echo $char."<br/>";

echo "$path";
?>
</body>

</html>
