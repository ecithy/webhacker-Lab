<?php
echo "------------------------- WAF LAMP SQL_GET_STRING   --------------------------------"."<br>";
#$id = $_REQUEST["id"];
echo "param-username:".$_GET['username']."<br>";
$username = $_GET["username"];
$conn=mysql_connect("127.0.0.1","sql01","sql01");
if($conn){
      echo "database connect  success";
}
echo "<hr>";

mysql_select_db('sql01',$conn);
$sql="select * from user where username='$username'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result)){ 
      echo "user ID: ".$row['id']."<br>";
      echo "username: ".$row['username']."<br>";
      echo "password: ".$row['password']."<br>";
      echo "email: ".$row['email']."<br>";
      echo "<hr>";

}
mysql_close($conn);


echo "SQL: ".$sql;

?>
