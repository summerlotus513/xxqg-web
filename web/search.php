<?php
 #search.php @SummerLotus 3.28 请保留版权 www.myepoch.cn
include_once("mode_1.php");//引用处理类文件
  
$f = new ss();
header("Content-type: text/html; charset=utf-8");
$servername = "localhost";
$username = "user";
$password = "passwd";


$conn = new mysqli($servername, $username, $password,"xxqg");

if ($conn->connect_error) {
  die("连接数据库失败: " . $conn->connect_error);
} 
mysqli_set_charset($conn,'utf8'); 
$searchs = $_POST['search'];  //传递search框过来的值
$searchs = trim($searchs);
 #echo $_POST["search"];
 #echo $searchs;
 
if (!$searchs)
{
	echo '搜索内容不能为空.';
	exit;
}

$f->ssuo();
$result = mysqli_query($conn,"SELECT * FROM daan where ques like '%$searchs%'");
if (mysqli_num_rows($result) < 1) 
{
	echo <<< html
	<div align="center">
html;
	echo "<p style='color:#ff0000; font-size:20px;'>";
	echo '没有数据';
	echo "</p>";
	echo "</div>";
}
   
while($row = mysqli_fetch_array($result))
{
   $f -> div_m($row['id'],$row['ques'],$row['ans'],$row['op']);
  #echo $row['title'] ;
  #echo "<br />";
}
echo <<< html
<div id="footer">
html;
echo "<a href =\"https://www.myepoch.cn\" style=\"color:red;\">";
echo "MyEpoch</a> CopyRight@2020</a></div>";
echo "</body>";
echo "</html>";
mysqli_close($conn);
?>
