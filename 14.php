<!DOCTYPE html>
<lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap
/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery
.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootst
rap.min.js"></script>
<style>
  #contact-box{
      background-image:url('backwood.jpg');
      background-repeat: no-repeat;
      backdround-attachment: fixed;
      background-size: cover;
     
      }
      
 
    
  
  
</style>
</head>

<body>
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">CONTACT US</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background-color: black; color:white">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 class="modal-title">CONTACT US</h2>
          </div>

        
          <div id="contact-box" style=" text-align: center ; color:white ">
          <form action="">
            <div class="form-group" style=" text-align: center ">
               <label for="name">Name:</label>
               <input type="text" name="name" id="name" placeholder="Enter your name" style="color: black;">
                           
             </div>
             <div class="form-group"  style=" text-align: center">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Enter your email" style="color: black;">
                           
             </div>
             <div class="form-group"  style="text-align:center">
                <label for="phone">Phone no:</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone no" style="color: black;">
                           
             </div>
             <div class="form-group"  style="text-align:center">
                <label for="Address">Address</label>
                <input type="text" name="Address" id="Address" placeholder="Enter your Address" style="color: black;">
                           
             </div>
             <div class="form-group"  style="text-align:center">
                <label for="Order date">Order date</label>
                <input type="date" name="Order date" id="Order date" style="color: black;">
                           
             </div>
          </form>
          </div>
         
          <div class="modal-footer" style="background-color: black;">
            <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>