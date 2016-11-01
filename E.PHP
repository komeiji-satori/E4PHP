<?php
/*Powered By Loli Tech*/
function 执行($cmd){
	return system($cmd);
}
function 退出(){
	exit();
}
function 文件上传($files){
	return $_FILES[$files];
}
function HASH加密($str,$salt){
	return crypt($str,$salt);
}
function 设置COOKIE($name,$value,$time){
	setcookie($name,$value,$time);
}
function 取COOKIE($name=''){
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
function 十六到十($str){
	return hexdec($str);
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
function 取文本长度($str){
	return strlen($str);
}
function 取文本位置($str,$word){
	return strpos($str,$word);
}
function HTML标记过滤($str){
	return htmlspecialchars($str);
}
function 调试输出($str){
	print_r($str);
}
function 获取URL参数($str){
	return $_GET[$str];
}
function 获取POST参数($str){
	return $_POST[$str];
}
function 取用户IP(){
	return $_SERVER['REMOTE_ADDR'];
}
function 取用户UA(){
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
function 取现行时间戳(){
	return time();
}
function 取文字摘要($str){
	return md5($str);
}
function 取文件MD5($file){
	return md5_file($file);
}
function 读入文件($file){
	return file_get_contents($file);
}
function Json序列化($array){
	return json_encode($array);
}
function Json反序列化($str){
	return json_decode($str);
}
function HTTP读文本($url){
	return file_get_contents($url);
}
function 写文件($str,$filename){
	file_put_contents($filename,$str);
	return true;
}
function 定义变量($name,$value){
	define($name,$value);
}
function 设置HTTP头($header){
	header($header);
}