<?php
echo "------------------------- WAF LAMP SQL_REQUEST_SEARCH   --------------------------------"."<br>";
$username = $_REQUEST["username"];
echo "param-username:".$username."<br>";
$conn=mysql_connect("127.0.0.1","sql01","sql01");
if($conn){
      echo "database connect  success";
}
echo "<hr>";

mysql_select_db('sql01',$conn);
$sql="select * from user where username like '%$username%'";
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
