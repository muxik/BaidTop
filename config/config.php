<?php
// 网页头
$head = <<<DOC
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>百度热点</title>
    <style>
        .list-title{
            font-size: 18px;
            color: brown;
        }
        .main {
            margin-left: 40%;
        }
        .title{
            font-size: 20px;
            color: #1bbc21;
            font-weight: bolder;
        }
</style>
</head>
<body>
<h1 align="center">百度热点</h1>
<hr>
<div class="main">
DOC;

// 网页底部
$foot = <<<DOC
</div>
</body>
</html>
DOC;


return [
    'head' => $head,
    'foot' => $foot
];

?>


