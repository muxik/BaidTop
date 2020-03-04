<?php
require __DIR__ .'/Request.php';

// 运行次数
$run_num = $argv[2];

//运行时间间隔
$interval = $argv[3];


if ($argv[1] == 'start'){
    $run = new Request($run_num,$interval);
    $run->start();
}else {
    echo "Error:参数错误！\n请使用php run.php start [运行次数] [时间间隔] 开始运行\n";
}