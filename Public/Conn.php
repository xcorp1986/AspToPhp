<?php


//************************************************************
//作者：云端 (精通ASP/VB/PHP/JS/Flash，交流合作可联系本人)
//版权：源代码公开，各种用途均可免费使用。
//创建：2016-01-15
//联系：QQ313801120  交流群35915100(群里已有几百人)    邮箱313801120@qq.com   个人主页 sharembweb.com
//更多帮助，文档，更新　请加群(35915100)或浏览(sharembweb.com)获得
//*                                    Powered By 云端
//************************************************************


//define('$db',"aaa");
$conn="";
function openConn() {
	global $conn;
	$conn = new mysql();
	
	$dbhost='localhost';$dbuser='root';$dbpwd='123456';$dbname='phpwebdata';
	$conna = @mysql_connect($dbhost,$dbuser,$dbpwd);
    if(!$conna){
		exit('<a href="PHP2/ImageWaterMark/Include/startInstall.php" target="_blank">连接服务器失败，点击配置</a>');
	}
    if(!mysql_select_db($dbname,$conna)){
		exit('<a href="PHP2/ImageWaterMark/Include/startInstall.php" target="_blank">连接数据库失败，点击配置</a>');	
	}
	
	mysql_query("set names 'gb2312'"); //数据库输出编码
	
	$conn->connect($dbhost,$dbuser,$dbpwd);
	$conn->select_db($dbname);
	//$conn->select_db("phpcmsv9");
	return $conn;
}

//Sql测试查找
function testSql() {
	global $conn; 
	$rs=$conn->query("select * From padmin"); 
	while($arr=$conn->fetch_array($rs)){ 
		echo($arr["UserName"] . "<hr>");	
	}
}
//Sql测试查找
function testSql2() { 
	$conn=openConn();
	$rs=$conn->query("select * From padmin"); 
	while($arr=$conn->fetch_array($rs)){
		echo($arr["UserName"] . "<hr>");	
	}
}

?>