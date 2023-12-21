function DeleteEntry() {
	var  AccountPassw = document.getElementById('AccountPassw').value;
	var  DeleteLEConfirm = document.getElementById('DeleteLEConfirm’).value;
		if(DeleteLEConfirm != AccountPassw) {
			confirm("Please Enter Correct Code");	
			} else {
				if(confirm('Do You Want To Delete')){
					return true;
				}else{
					return false;
				}
			}			
		}
onclick="return DeleteEntry('<?php echo $iduser; ?>');"
echo "<br>sqlexp--".$sqlexp = "delete from tbluser where iduser = '".$iduser."'";
$resexp = mysql_queryEH($sqlexp);
echo  "<script type='text/javascript'>window.location.href=user.php'</script>";