<?php
include 'E.PHP';
定义变量('地址','https://api.satori.moe/hitokoto.php');
定义变量('返回',HTTP读文本(地址));
定义变量('JSON',Json反序列化(返回));
//调试输出(HTTP读文本('http://www.baidu.com'));
//执行('cmd');
//取文字摘要('23333');
调试输出(JSON);
//调试输出(格式化时间('Y年m月d日 H:i:s'));
//调试输出(取URL参数('test'));
//调试输出(HTML标记过滤(取URL参数('w')));
//调试输出(文本分割('helloworld','l'));
//输出(取当前文件名());