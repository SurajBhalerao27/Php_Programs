[2:14 pm, 17/02/2023] +91 87676 56889: <?php
include('connection.php');
echo $iduser = $_GET['iduser'];
if(isset($POST['delete'.$iduser])){
	echo "<br>sqlexp--".$sqlexp = "delete from tbluser where iduser = '".$iduser."'";
$resexp = mysql_query($sqlexp);
echo  "<script>window.location.href='user.php'</script>";

}
?>
[2:15 pm, 17/02/2023] +91 87676 56889: <?php
include('connection.php');

if(isset($_POST['save'])){
    echo "---".$username = $_POST['username'];
    echo "---".$password = $_POST['password'];
    echo "---".$confirmpassword = $_POST['confirmpassword'];
    echo "---".$emailid = $_POST['emailid'];

  echo  $sql="insert into tbluser(username,password,confirmpassword,emailid)
    values('".$username."','".$password."','".$confirmpassword."','".$emailid."')";
    $res = mysql_query($sql);
}
?>
<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>		
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/js/modal.js"></script>
<title> Login Page </title>
<script>
function DeleteEntry(iduser) {
	//alert(iduser);
			
				if(confirm('Do You Want To Delete')){
					
					return true;
				}else{
					return false;
				}	
}

</script>
<style> 
Body {
  background-image: url('background.jpg');  
  font-family: Calibri, Helvetica, sans-serif;
  background-color: light blue;
}
button { 
       background-color: #4CAF50; 
       width: 100%;
        color: black; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
 form { 
        border: 3px solid #f1f1f1; 
    } 
 input[type=text], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 6px 6px; 
        display: inline-block; 
        border: 2px solid green; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
 .container { 
        padding: 25px; 
        background-color: lightblue;
    } 
</style> 
</head>  
<body img src="nature.jpg" alt="nature" width="300" height="200">  
   
    <center> <h1> Student Login Form </h1> </center> 
    <form method="post" name="userform" id="userform" action="" >
        <div class="container"> 
            <label>Username : </label> 
            <input type="text" placeholder="Enter Username" name="username" required>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required>
            <label> confirm Password : </label> 
            <input type="confirm password" placeholder="Enter confirm Password" name="confirmpassword" required><br>
            <label> Email ID : </label> 
            <input type="Email" placeholder="Email" name="emailid" required>
            <button type="submit" id="save" name="save" >Submit</button><br>

            <input type="submit" id="save" name="save" value="save" >
            <button>Cancle</button>
            
            <input type="file" id="productimg" name="productimg"><br><br>
            
        </div> 
    </form>  
    <table class="table table-bordered"> 
        <tr>
            <th>sr</th>
            <th>user </th>
            <th>password</th>
            <th>confirm pwd</th>
            <th>email</th>
            <th>delete</th>
        </tr>
<?php
    $sq = "select * from tbluser";
    $rsq = mysql_query($sq);
    $i=1;
    while($rwq = mysql_fetch_array($rsq)){
?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $rwq['username']; ?> </td>
            <td><?php echo $rwq['password']; ?></td>
            <td> <?php echo $rwq['confirmpassword']; ?></td>
            <td><?php echo $rwq['emailid']; ?></td>
            
			<td><form method="post" action="deleteuser.php?iduser=<?php echo $rwq['iduser']; ?>">
			<button type="submit" id="delete_<?php echo $rwq['iduser']; ?>" name="delete_<?php echo $rwq['iduser']; ?>" class="btn btn-danger" onclick="return DeleteEntry('<?php echo $rwq['iduser']; ?>');">Delete</button>
            </td></form>
        </tr>
        <?php $i++; } ?>
</table> 
</body>   
</html>