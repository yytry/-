<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<meta charset=utf-8/>
<head>
    <style type="text/css">
        h1 {letter-spacing:30px}
    </style>
    <title>留言板from果冻。</title>
    <style>body{background-image:url(timg.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
        overflow: hidden;
        height:100%;
        background-attachment:fixed;
        position:relative;}
        form{position:absolute;left:600px;top:80px;}
        h1{position:absolute;left:800px;}
    </style>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="name";
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
// 检测连接
$conn->query("set name 'utf8'");
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);}
?>
<form action="up.php" method="POST">
    <h4 style="background: transparent;"> 你是我的谁？</h4><br>
    <input  type="text" width="200px" height="30px" name="name" style="background: transparent;" >
    <br>
    <h4 style="background: transparent;"> 想对我说什么？</h4><br>
    <textarea name="document" id="0" cols="40" rows="10" style="background: transparent;" ></textarea>
<br>
    <input type="submit" value="留言" name="1" style="background: transparent;height:30px;width:50px"><br>
    <script type="text/javascript">
        function btnclick() {$.ajax({type: "get"  url: "up.php" success: "alert(msg)"});}
    </script>
    <body>
    <h1>留 言 板</h1>

</form>
</body>
</html>




