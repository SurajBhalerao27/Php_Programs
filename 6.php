<?php 
error_reporting('E_All');
include('conn.php');


if(isset($_POST['signin'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

  echo $sql ="select * from tbluser where username='".$username."' and password='".$password."' ";
   $res = mysql_query($sql);
   echo $cnt = mysql_num_rows($res);
   if($cnt >0){
        echo "login successfully";
   }else{
        echo "User name password not match..";
   }
}


?>