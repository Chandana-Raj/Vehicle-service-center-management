<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
 
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Transparent form</title>
  <style>
  body{
    background-image:url('bgfront.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
</head>
 
<body>
<div class="header">
	<center><h1 style="color:white;">VEHICLE SERVICE CENTER.</h1></center>
</div>
  <div class="container">
    <div class="form">
      <div class="btn">
        <button class="adminBtn">ADMIN</button>
        <button class="customerBtn">CUSTOMER</button>
      </div>
      <form class="admin" action="first-to-second.php" method="post">
        <div class="formGroup">
          <input type="text" id="adminId" placeholder="Admin id" required autocomplete="off" name="adminId">
        </div>
        <div class="formGroup">
          <input type="password" id="password" name="adminPassword" placeholder="Password" required autocomplete="off">
          </div>
        <div class="formGroup">
          <button type="submit" name="admin_submit" class="btn2">ENTER</button>
        </div>
 
      </form>
        <br />
      <!------ customer Login Form -------- -->
      <form class="customerLogin" action="first-to-second.php" method="post">
        
        <div class="formGroup">
          <input type="Text" placeholder="vehicle_ID" name="vehicle_ID" required autocomplete="off">
        </div>
       
        <div class="formGroup">
          <button type="submit" class="btn2" name="customer_submit" >ENTER</button>
        </div>
 
      </form>
 
    </div>
  </div>
 
  <script src="fptoggle.js"></script>

  
</body>
 
</html>