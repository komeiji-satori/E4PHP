<?php
/*Powered By Loli Tech*/
/*Modify By Loli XiaoLu*/
define("真",true);
define("假",false);
define("空",null);
function 输出PHP信息到页面(){
    phpinfo();
}
function 执行($cmd){
    return system($cmd);
}
function 退出(){
    exit();
}
function 取文件上传($files){
    return $_FILES[$files];
}
function 删除文件($file){
    return unlink($file);
}
function HASH加密($str,$salt){
    return crypt($str,$salt);
}
function 设置COOKIE($name,$value,$time){
    setcookie($name,$value,$time);
}
function 读取COOKIE($name=''){
    return $_COOKIE[$name];
}
function 是否为空($str){
    return empty($str);
}
function 创建文件夹($name){
    return mkdir($name);
}
function 文件是否存在($file){
    return file_exists($file);
}
function 正则表达式($pattern,$subject,$matches=''){
    return preg_match($pattern,$subject,$matches);
}
function 十六进制转十进制($str){
    return hexdec($str);
}
function ASCII转十六进制($str){
    return bin2hex($str);
}
function 十六进制转ASCII($str){
    return hex2bin($str);
}
function 反转字符串($str){
    return strrev($str);
}
function 文本替换($search,$replace,$subject){
    return str_replace($search,$replace,$subject);
}
function 变量转整数($str){
    return intval($str);
}
function 文本分割($word,$str,$limit=0){
    return explode($word,$str,$limit);
}
function 文本添加反斜杠($str,$word){
    return addslashes($str,$word);
}
function 读取文本长度($str){
    return strlen($str);
}
function 对象转数组($array) {  
    if(is_object($array)) {  
        $array = (array)$array;  
     } if(is_array($array)) {  
         foreach($array as $key=>$value) {  
             $array[$key] = Object转Array($value);  
             }  
     }  
     return $array;  
}
function 读取文本位置($str,$word){
    return strpos($str,$word);
}
function HTML标记过滤($str){
    return htmlspecialchars($str);
}
function 调试输出($str){
    print_r($str);
}
function 读取文件大小($file){
    return filesize($file);
    clearstatcache();
}
function 延迟($sec){
    sleep($sec);
}
function 读取文件格式($file){
    return filetype($file);
    clearstatcache();
}
function 读取磁盘可用空间($disk_name){
    return disk_free_space($disk_name);
}
function 读取磁盘总空间($disk_name){
    return disk_total_space($disk_name);
}
function 读取URL参数($str){
    return $_GET[$str];
}
function 读取POST参数($str){
    return $_POST[$str];
}
function 读取用户IP(){
    return $_SERVER['REMOTE_ADDR'];
}
function 读取用户UA(){
    return $_SERVER['HTTP_USER_AGENT'];
}
function URL编码($url){
    return urlencode($url);
}
function URL解码($url){
    return urldecode($url);
}
function 输出($str){
    echo $str;
}
function 格式化时间($type,$time=''){
    if ($time=='') {
        $time=time();
    }
    return date($type,$time);
}
function BASE64加密($str){
    return base64_encode($str);
}
function BASE64解密($str){
    return base64_decode($str);
}
function 读取现行时间戳(){
    return time();
}
function 读取文字摘要($str){
    return md5($str);
}
function 读取文件MD5($file){
    return md5_file($file);
}
function 读取文件内容($file){
    return file_get_contents($file);
}
function Json序列化($array){
    return json_encode($array);
}
function Json反序列化($str){
    return Object转Array(json_decode($str));
}
function 读取链接内容($url){
    return file_get_contents($url);
}
function 写入文件($str,$filename){
    file_put_contents($filename,$str);
}
function 取当前路径(){
    return __DIR__;
}
function 定义常量($name,$value){
    define($name,$value);
}
function 设置超文本传输协议头($header){
    header($header);
}
function 启动会话(){
    session_start();
}
function 设置会话变量($argn,$argv){
    $_SESSION[$argn]=$argv;
}
function 读取会话变量($argn){
    if (isset($_SESSION[$argn]))
        return $_SESSION[$argn];
    return 假;
}
function 删除会话变量($argn){
    unset($_SESSION[$argn]);
}
function 销毁会话(){
    session_destroy();
}
