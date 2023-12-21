<?php 
include('conn.php');
if(isset($_POST['save'])){
	$productname = $_POST['productname'];
	$productimg = $_POST['productimg'];
	$productrate = $_POST['productrate'];
	
	echo $qry = "insert into tblproduct(productname,productimg,productrate)values('".$productname."','".$productimg."','".$productrate."')";
	$res = mysql_query($qry);
	echo mysql_insert_id();
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>
	<body>
<form action="" method="POST">
  <label for="myfile">Product:</label>
  <input type="text" id="productname" name="productname"><br><br>
   <label for="myfile">Rate:</label>
  <input type="number" id="productrate" name="productrate"><br><br>
   <label for="myfile">Select a file:</label>
  <input type="file" id="productimg" name="productimg"><br><br>
  <input type="submit" id="save" name="save" value="save">


<table class="table table-bordered">
	<tr>
		<td>sr</td>
		<td>Product</td>
		<td>Rate</td>
		<td>Photo</td>
	</tr>
	<?php 
		echo $s = "select * from tblproduct";
		$r = mysql_query($s);
		$i=1;
		while($rw = mysql_fetch_array($r)){
	?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $rw['productname']; ?></td>
		<td><?php echo $rw['productrate']; ?></td>
		<td><img src="<?php echo "image/".$rw['productimg']; ?>" ></td>
	</tr>
		<?php } ?>
</table>
</form>
</body>
</html>