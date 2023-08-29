<?php

$link = mysqli_connect("localhost","root","","vsc");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 if(isset($_POST['delbrdetailsBtn'])) { ?>
    <!DOCTYPE html>
<html lang='en'>
<head>

  <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <link rel='stylesheet' href='style3.css'>
             
              
              <title>Transparent form</title>
              <style>
  body{
    background-image:url('bgfront2.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
</head>
<body>
<div class='header'>
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
<center><h2 style='color:white;'>Delete branch details.</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
  
<form action='delete_code.php' method='post'>


<div class="formGroup">
    	<span class='label' for='branch_id'>Branch id:</span>
        <input type='text' id='bid'  name='branch_id'  required autocomplete='off'>
        
        </div>


<div class="formGroup">
          <button type='submit' class='btn2' name='branch_delete_submit' >Delete branch details</button>
          </div>

</form>
</br  >
<form action='first-to-second.php' method='post'>
            <div class="formGroup">
          <button type='submit' class='btn2' name='home' >Home</button>
           </div>
           </form>
           


</div>
</div>
</div>
</body>
</html>
<?php }?>






<?php  if(isset($_POST['delsDetailsBtn'])) { ?>
<!DOCTYPE html>
<html lang='en'>
<head>

  <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <link rel='stylesheet' href='style3.css'>
             
              
              <title>Transparent form</title>
              <style>
  body{
    background-image:url('bgfront2.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
</head>
<body>
<div class='header'>
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
<center><h2 style='color:white;'>Delete services details.</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='delete_code.php' method='post'>


<div class="formGroup">
    	<span class='label' for='services'>Service:</span>
        <input type='text' id='services'  name='services' required autocomplete='off'>
        
        </div>
    
    
    
    
<div class="formGroup">
          <button type='submit' class='btn2' name='service_delete_submit' >Delete service</button>
          </div>

</form>
</br  >
<form action='first-to-second.php' method='post'>
            <div class="formGroup">
          <button type='submit' class='btn2' name='home' >Home</button>
           </div>
           </form>


</div>
</div>
</div>
</body>
</html>
<?php }?>










<?php  if(isset($_POST['delwDetailsBtn'])) { ?>
<!DOCTYPE html>
<html lang='en'>
<head>

  <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <link rel='stylesheet' href='style3.css'>
             
              
              <title>Transparent form</title>
              <style>
  body{
    background-image:url('bgfront2.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
</head>
<body>
<div class='header'>
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
<center><h2 style='color:white;'>Delete worker details.</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='delete_code.php' method='post'>
<div class="formGroup">
    	<span class='label' for='employeeid'>Employee id:</span>
        <input type='text' id='employeeid'  name='employee_id' required autocomplete='off'>
        
        </div>
    

<div class="formGroup">
          <button type='submit' class='btn2' name='worker_delete_submit' >Delete worker details</button>
          </div>
</form>
</br  >
<form action='first-to-second.php' method='post'>
            <div class="formGroup">
          <button type='submit' class='btn2' name='home' >Home</button>
           </div>
           </form>


</div>
</div>
</div>
</body>
</html>
<?php }?>











<?php  if(isset($_POST['delsbDetailsBtn'])) { ?>
<!DOCTYPE html>
<html lang='en'>
<head>

  <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <link rel='stylesheet' href='style3.css'>
             
              
              <title>Transparent form</title>
              <style>
  body{
    background-image:url('bgfront2.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
</head>
<body>
<div class='header'>
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
<center><h2 style='color:white;'>Delete services booked details.</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='delete_code.php' method='post'>


	
    <div class="formGroup">
    	<span class='label' for='vehicle_no'>Vehicle no:</span>
        <input type='text' name='vehicle_no' id='vehicle_no' required autocomplete='off'>
        </div>
    
        <div class="formGroup">
    <span class='label' for='services_selected'>services selected:</span>
        <input type='text' name='services_selected' id='services_selected' required autocomplete='off'>
        </div>    

<div class="formGroup">
          <button type='submit' class='btn2' name='sb_delete_submit' >Delete services booked details</button>
          </div>
</form>
</br  >
<form action='first-to-second.php' method='post'>
            <div class="formGroup">
          <button type='submit' class='btn2' name='home' >Home</button>
           </div>
           </form>


</div>
</div>
</div>
</body>
</html>
<?php }?>

<?php  if(isset($_POST['delbbDetailsBtn'])) { ?>
<!DOCTYPE html>
<html lang='en'>
<head>

  <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <link rel='stylesheet' href='style3.css'>
             
              
              <title>Transparent form</title>
              <style>
  body{
    background-image:url('bgfront2.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
</head>
<body>
<div class='header'>
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
<center><h2 style='color:white;'>Delete billing details.</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='delete_code.php' method='post'>
<div class="formGroup">
    	<span class='label' for='vehicle_no'>Vehicle No:</span>
        <input type='text' id='vehicle_no'  name='vehicle_no' required autocomplete='off'>
        
        </div>
    
    

<div class="formGroup">
          <button type='submit' class='btn2' name='bb_delete_submit' >Delete billing details</button>
          </div>
</form>
</br  >
<form action='first-to-second.php' method='post'>
            <div class="formGroup">
          <button type='submit' class='btn2' name='home' >Home</button>
           </div>
           </form>


</div>
</div>
</div>
</body>
</html>
<?php }?>







<?php  if(isset($_POST['delcdetailsBtn'])) { ?>
<!DOCTYPE html>
<html lang='en'>
<head>

  <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <link rel='stylesheet' href='style3.css'>
             
              
              <title>Transparent form</title>
              <style>
  body{
    background-image:url('bgfront2.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
</head>
<body>
<div class='header'>
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
<center><h2 style='color:white;'>Delete customer details.</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='delete_code.php' method='post'>

    

	<div class="formGroup">
    	<span class='label' for='vehiclenumber'>Vehicle no:</span>
        <input type='text' name='vehicle_no' id='vehicleno' required autocomplete='off'>
        </div>
    
<div class="formGroup">
          <button type='submit' class='btn2' name='customer_delete_submit' >Delete customer details</button>
          </div>
</form>
</br  >
<form action='first-to-second.php' method='post'>
            <div class="formGroup">
          <button type='submit' class='btn2' name='home' >Home</button>
           </div>
           </form>
<br />


</div>
</div>
</div>
</body>
</html>
<?php }?>



<?php
 
// close connection
mysqli_close($link);
?>




