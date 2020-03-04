<?php

class Request
{
    // 休息时间(s)
    protected $interval = null;
    // 爬取次数
    protected $run_num = null;


    public function __construct($run_num, $interval = 1)
    {
        date_default_timezone_set("Asia/Shanghai");
        $this->run_num = $run_num;
        $this->interval = $interval;
    }

    public function start()
    {
        for ($i = 1; $i <= $this->run_num; $i++) {
            echo date('[H:i:s]')."运行{$i}次，文件:". $this->play()."\n";
            echo "时间间隔:".$this->interval."秒！\n";

            sleep($this->interval);
        }
        echo "执行完成！，总次数：" . $this->run_num . "\n";
    }

    private function play()
    {
        $url = "http://top.baidu.com/buzz?p=top10";
        // curl 四部曲

        //初始化
        $ch = curl_init();
        // 设置选项
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行并获取html
        $content = curl_exec($ch);
        if (!$content) {
            echo "error:" . curl_error($ch);
        }
        // 关闭
        curl_close($ch);

        //匹配
        preg_match_all('/<td\sclass="keyword">[\s\S]*<\/td>/', $content, $matches);
        preg_match_all('/<a\sclass="list-title"[^>]*>.*<\/a>/', $matches[0][0], $res);
        $res = mb_convert_encoding($res, 'utf-8', 'GBK,UTF-8,ASCII');
        $body = null;
        foreach ($res[0] as $k => $v) {
            $body .= "<span class='title'>$k:</span>" . $v . "\r\n\n" . '<br/>';
        }
        $html = require __DIR__ . '/config/config.php';

        $filename = __DIR__ . '/data/' . time() . '.html';
        file_put_contents($filename, $html['head'] . $body . $html['foot']);
        return $filename;
    }
}
