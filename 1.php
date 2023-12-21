<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="view<!port" conte+nt="width=device-width, initial-scale=1.0">
        <title>login form</title>
        <link  rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      
    
        <style>
            body{
                background-image:url('12.jpg');
                background-repeat: no-repeat;
                backdround-attachment: fixed;
                background-size: cover;
               
               
                }
                
        </style>
        <script>
            function caltotalamt(){
                var qty = $('#quantity').val();
                var price = $('#price').val();
                var totalamt = qty * price;
                $('#totalamt').text(totalamt); 
                $('#total').val(totalamt); 
                //alert(totalamt);
            }
            
            </script>
        
    </head>

    <body>
  <?php 
error_reporting('E_All');
include('connection.php');


if(isset($_POST['submit'])){
   
   $coffee = $_POST['coffee'];
   $type = $_POST['type'];
   $quantity= $_POST['quantity'];
   $price= $_POST['price'];
   $total= $_POST['total'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $mobileno = $_POST['mobileno'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $pin = $_POST['pin'];
   
   

   echo $qry = "insert into tblproduct(coffee,type,quantity,price,total,name,email,mobileno,city,state,mobileno)values
   ('".$coffee."','".$type."','".$quantity."','".$price."','".$total."','".$name."','".$email."','".$mobileno."''".$city."','".$state."','".$mobileno."')";
   $res = mysql_query($qry);
   echo mysql_insert_id()

}

?>

        <h1  style="text-align:center; color:white;"><strong><big>The Cafe with all coffees</big></strong></h1>
        <h2 style="text-align:center; color:white;"><strong>Order Form</strong></h2>
        <form style="align-item:center ; margin-left:35%" method="post">
        <div class="row">
        <lable class="col-md-2" for="coffee" style=" color:white;">Coffee:</lable>
                <select class="col-md-4">
                    <option value="0">select</option>
                    <option value="1">Latte</option>
                    <option value="2">Cappuccino</option>
                    <option value="3">Americano</option>
                    <option value="4">Espresso</option>
                    <option value="5">Mocha</option>
                    </select><br><br>
            </div>
            <div class="row">
                <lable class="col-md-2" style=" color:white;">Type</lable>
                <input type="radio" name="type" id="type" value="Regular">Regular<br>
                 <input type="radio" name="type" id="type" value="Decaffeinated"  style="margin-left: 17%;">Decaffeinated<br>

            </div>
            <div class="row">
                <lable  class="col-md-2" for="quantity" style="color:white;">Quantity</lable>
                <input  class="col-md-4"  type="text" id="quantity" name="quantity" onchange="caltotalamt();" placeholder="enter your  quantity"requried>
           
            </div><br>
            <div class="row">
                <lable  class="col-md-2" for="price" style="color:white;">Price</lable>
                <input  class="col-md-4"  type="text" id="price" name="price" onchange="caltotalamt();" placeholder="enter your  quantity"requried>
           
            </div><br>
            <div class="row">
                <lable  class="col-md-2" for="total" style="color:white;" id="totalamt" name="totalamt">Total</lable>
                <input  class="col-md-4" type="hidden" id="total" name="total" onchange="caltotalamt();" placeholder="enter your  total"requried>
           
            </div><br>
         
           
            <div class="row">
                <lable  class="col-md-2" for="name" style=" color:white;">Name</lable>
                <input  class="col-md-4" type="text" id="name" name="name"  placeholder="enter your  name"requried>
           
            </div><br>
            <div class="row">
                <lable class="col-md-2" for="email" style=" color:white;">E-mail address</lable>
                <input class="col-md-4"   type="email" id="email" name="email"  placeholder="enter your  email"requried>
           
            </div><br>
            <div class="row">
                <lable class="col-md-2"  for="mobileno" style=" color:white;">Mobile No</lable>
                <input class="col-md-4"   type="mobileno" id="mobileno" name="mobileno"  placeholder="enter your  mobileno"requried>
           
            </div><br>
            <div class="row">
                <lable class="col-md-2"  for="city" style=" color:white;">City </lable>
                <input class="col-md-4"   type="text" id="city" name="city"  placeholder="enter your  city"requried>
           
            </div><br>
            <div class="row">
                <lable class="col-md-2" for="state" style=" color:white;">State</lable>
                <input class="col-md-4"  type="text" id="state" name="state"  placeholder="enter your  state"requried>
           
            </div><br>
            <div class="row">
                <lable class="col-md-2" for="pin" style=" color:white;">Pincode No</lable>
                <input class="col-md-4"  type="pin" id="pin" name="pin"  placeholder="enter your  pin"requried>
           
            </div><br>
            
                
            <div class="row" style="margin-left: 20%;">
            <input type="Submit" value="Submit"   class="btn btn-success " name="Submit" id="Submit"   >
            <input type="Reset" value="Reset"  class="btn btn-danger "  name="Reset" id="Reset"  >
        </div>
    
        </form>
        </div>    
    </body>
    </html>