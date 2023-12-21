<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>		
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/js/modal.js"></script>
    <title>payment page</title>
    <style>
        body{
           background-image:url("img/gym1.jpg");
           background-repeat:no-repeat;
           background-attachment:fixed;
           background-size:cover;
        }
        
        .login{
            width:370px;
            height:min-content;
            padding:20px;
            border-radius:12px;
            background:gray;
            margin-left: 35%;
            margin-top: 7%;
        }
    </style>
</head>
<body >
<?php include('connection.php'); ?>
    <div class="login" >
        <h1 class="text center" style="text-align:center">Pyment</h1>
        <form class="from-control" method="post">
        <div class="row">
        <label class="from-label col-md-5" for="name" style="margin-top: 5%;">Costomer Name</label>
        <input class="from-control input-sm col-md-7" type="text" id="costemer" name="costomername" placeholder="costomer name"style="margin-top: 5%;"required>
        </div> 
        
        <div class="row">
        <label class="from-label col-md-5" for="mobileno" style="margin-top: 5%;">Mobile no</label>
        <input class="from-control input-sm col-md-7" type="text" id="mobileno" name="mobileno" placeholder="mobile no" style="margin-top: 5%;" required>    
        </div>
		<br>
		
       <div class="row">
       <label class="form-lable col-md-5" for="paymenttype">Payment type</font></label>
      <select class="from-control input-sm col-md-7" name="paymenttype" id="paymenttype">
        <option value="select" >select</option>
        <?php 
	   $sq1 = "select * from tbltransaction";
	   $rs1 = mysql_query($sq1);
	   while($rw1 = mysql_fetch_array($rs1)){
	   ?>
	   <option value="<?php echo $rw1['idtransaction']; ?>"><?php echo $rw1['transactiontype']; ?></option>
	   <?php } ?>
    </select>
	</div>
	
	<div class="row">
        <label class="from-label col-md-5" for="fee" style="margin-top: 5%;">fee</label>
        <input class="from-control input-sm col-md-7" type="text" id="fee" name="fee" placeholder="fee" style="margin-top: 5%;" required>    
        </div> 
       
	   <div class="row">
        <label class="from-label col-md-5" for="cash" style="margin-top: 5%;">Cash</label>
        <input class="from-control input-sm col-md-7" type="text" id="cash" name="cash" placeholder="cash" style="margin-top: 5%;" required>    
        </div> 
       
	   <div class="row">
        <label class="from-label col-md-5" for="gpay" style="margin-top: 5%;">Gpay</label>
        <input class="from-control input-sm col-md-7" type="text" id="gpay" name="gpay" placeholder="gpay" style="margin-top: 5%;" required>    
        </div> 
		
        <div class="row">
        <label class="from-label col-md-5" for="remaining" style="margin-top: 5%;">Remaining</label>
        <input class="from-control input-sm col-md-7" type="text" id="remaining" name="remaining" placeholder="remaining" style="margin-top: 5%;" required>    
        </div> 
    </form>
	</div>
</body>
</html>