# 爬取百度热点关键词

__使用PHP制作的百度热点爬虫的__

## 环境配置

- php
    + 开启扩展curl
    
## 使用

1. 下载
```bash
$ git clone https://github.com/muxik/BaidTop.git
```

2.操作

```bash
$ php run.php start [爬取次数] [时间间隔(s)]
```

3. 实例

```bash
 php run.php start 2 1

[19:48:31]运行1次，文件:/srv/http/interval/data/1583322511.html
时间间隔:1秒！
[19:48:32]运行2次，文件:/srv/http/interval/data/1583322512.html
时间间隔:1秒！
执行完成！，总次数：2
 
```
4. 配置

    - __爬取的文件会自动保存在`data`文件夹下__

    - __若要配置样式可以在`config/config.php`自行调整__