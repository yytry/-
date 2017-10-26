<?php
$con = new mysqli("localhost","root","", "name");
$sql="insert into online(name,document) values ('{$_POST['name']}','{$_POST['document']}')";
echo '留言成功!',"<br>";
$result = $con->query($sql);
print_r($result);
$sql1="SELECT name,document FROM online";
$result1=mysqli_query($con,$sql1);
if (mysqli_num_rows($result1) > 0) {
    // 输出数据
    while ($row = mysqli_fetch_assoc($result1)) {
        echo "我是".$row["name"] . "<br>";
        echo "想对你说：" .$row["document"] . "<br>";
    }
}else {echo "无结果";}
mysqli_close($con);
?>
<html>
<body>
<style>body{
        background-image:url(MC.jpg);};
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center center;
    overflow: hidden;
    height:100%;
    background-attachment:fixed;
    position:relative;}
    form{position:absolute; left:600px; top:80px; } h1{position:absolute; left:800px;}
</style>
<form  action="Online Message.php" method="POST">
<input type="submit" value="继续留言" style="background: transparent;height:40px;width:70px"><br>
    <script type="text/javascript">
    function btnclick(){$.ajax({type: "get"  url: "Online Message.php"  success:  alert(msg)"});}
    </script>
</form>
</body>
</html>

