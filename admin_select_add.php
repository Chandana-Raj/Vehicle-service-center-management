<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vsc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

if(isset($_POST['brDetailsBtn'])){

$sql = "SELECT * from branches";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

?>
<!DOCTYPE html>
        <html lang='en'>
         
        <head>
          <meta charset='UTF-8'>
          <link rel='stylesheet' href='style2.css'>
          <title>Transparent form</title>
          <style>
  body{
    background-image:url('bgfortable.jpg');
    background-size: cover;
    background-attachment: fixed;

  }

  
  </style>
          
        </head>
         
        <body>
        <div class='header'>
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
  <center><h2 style='color:white;'>BRANCH DETAILS. </h1></center>
</div>
           
          <div class='container'>


       <table style='border-collapse: collapse; color:white;'>
           <tr>
                <th>Branch ID</th>
                 <th>Address</th>
                <th>Contact Number</th> 
                <th>Number of employees</th> 
                  
            </tr>
       <?php while($row = mysqli_fetch_array($result)){ ?>
          <tr>
                 <td> <?php echo $row['branch_id']; ?></td>
                <td><?php echo $row['b_address'];?></td>
                <td><?php echo $row['b_contact_no']; ?></td>
                <td><?php echo $row['no_of_employees']; ?></td>
                
                </tr>
                          <?php } ?>
        </table>
        </div>
        <div class='form'>
            <form action='first-to-second.php' method='post'>
            <div class='btn'>
              <button name='home'>Home</button>
       </div>
       </form>
       <br  />
       
       <form action='update.php' method='post'>
           <div class='btn'>
             <button name='branch_update'>Update</button>
      </div>
      </form>
      <br  />
       
       <form action='direct_add.php' method='post'>
           <div class='btn'>
             <button name='directaddbr'>Add Another Branch</button>
      </div>
      </form>
      <br  />
      <form action='delete.php' method='post'>
           <div class='btn'>
             <button name='delbrdetailsBtn'>Delete Branch</button>
      </div>
      </form> 
       </div>
        </body>
         
        </html>
        <?php
mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
?>

<?php if(isset($_POST['sDetailsBtn'])){

$sql = "SELECT * from services";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

?>
<!DOCTYPE html>
        <html lang='en'>
         
        <head>
          <meta charset='UTF-8'>
          <link rel='stylesheet' href='style2.css'>
         
          
          <title>Transparent form</title>
          <style>
  body{
    background-image:url('bgfortable.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
        </head>
         
        <body>
        <div class='header'>
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
  <center><h2 style='color:white;'>SERVICE DETAILS </h1></center>
</div>
           
          <div class='container'>


       <table style='border-collapse: collapse; color:white;'>
           <tr>
                <th>Services</th>
                 <th>Price</th>
                  
                  
            </tr>
       <?php while($row = mysqli_fetch_array($result)){ ?>
          <tr>
                 <td> <?php echo $row['services']; ?></td>
                <td><?php echo $row['price'];?></td>
                </tr>
                          <?php } ?>
        </table>
       </div>
       <div class='form'>
           <form action='first-to-second.php' method='post'>
           <div class='btn'>
             <button name='home'>Home</button>
      </div>
       </form>
       <br  />
     
           <form action='update.php' method='post'>
           <div class='btn'>
             <button name='serv_update'>Update</button>
      </div>
      </form>
      <br  />
       
       <form action='direct_add.php' method='post'>
           <div class='btn'>
             <button name='directaddss'>Add another service</button>
      </div>
      </form>
      <br  />
      <form action='delete.php' method='post'>
           <div class='btn'>
             <button name='delsDetailsBtn'>Delete a record</button>
      </div>
      </form> 
      </div>
       </body>
         
        </html>
        <?php
mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
?>


<?php if(isset($_POST['wDetailsBtn'])){

$sql = "SELECT * from workers_details";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

?>
<!DOCTYPE html>
        <html lang='en'>
         
        <head>
          <meta charset='UTF-8'>
           <link rel='stylesheet' href='style2.css'>
         
          
          
          <title>Transparent form</title>
          <style>
body{
background-image:url('bgfortable.jpg');
background-size: cover;
background-attachment: fixed;

}
</style>
        </head>
         
        <body>
        <div class='header'>
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
  <center><h2 style='color:white;'>WORKERS DETAILS </h1></center>
</div>
           
          <div class='container'>


       <table style='border-collapse: collapse; color:white;'>
           <tr>
                <th>Branch ID</th>
                 <th>Name</th>
                <th>Employee ID</th>  
                <th>Designation</th>  
                <th>Contact number</th>  
            </tr>
       <?php while($row = mysqli_fetch_array($result)){ ?>
          <tr>
                 <td> <?php echo $row['branch_id']; ?></td>
                <td><?php echo $row['w_name'];?></td>
                <td><?php echo $row['employee_id']; ?></td>
                <td><?php echo $row['designation']; ?></td>
                <td><?php echo $row['w_contact_no']; ?></td>
                </tr>
                          <?php } ?>
        </table>
       

        </div>
        <div class='form'>
            <form action='first-to-second.php' method='post'>
            <div class='btn'>
              <button name='home'>Home</button>
       </div>
       </form>
       <br  />
     
           <form action='update.php' method='post'>
           <div class='btn'>
             <button name='worker_update'>Update</button>
      </div>
      </form>
      <br  />
       
       <form action='direct_add.php' method='post'>
           <div class='btn'>
             <button name='directaddw'>Add another employee</button>
      </div>
      </form>

      <br  />
      <form action='delete.php' method='post'>
           <div class='btn'>
             <button name='delwDetailsBtn'>Delete a record</button>
      </div>
      </form> 
      
       </div>
        </body>
         
        </html>
        <?php
mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
?>



<?php if(isset($_POST['cDetailsBtn'])){

    $sql = "SELECT * from clients";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

?>
  <!DOCTYPE html>
            <html lang='en'>
             
            <head>
              <meta charset='UTF-8'>
               <link rel='stylesheet' href='style2.css'>
             
              
              <title>Transparent form</title>
              <style>
  body{
    background-image:url('bgfortable.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
            </head>
             
            <body>
            <div class='header'>
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
  <center><h2 style='color:white;'>CUSTOMER DETAILS </h1></center>
</div>
               
              <div class='container'>


           <table style='border-collapse: collapse; color:white;'>
               <tr>
                    <th>Customer Name</th>
                     <th>Vehicle number</th>
                    <th>Vehicle model</th>  
                    <th>Phone number</th>  
                    <th>Address</th>  
                    <th>Previous service date</th>  
                    <th>Upcoming service date</th>  
                    <th>Branch ID</th>  
                </tr>
           <?php while($row = mysqli_fetch_array($result)){ ?>
              <tr>
                     <td> <?php echo $row['c_name']; ?></td>
                    <td><?php echo $row['vehicle_no'];?></td>
                    <td><?php echo $row['vehicle_model']; ?></td>
                    <td><?php echo $row['c_phone_number']; ?></td>
                    <td><?php echo $row['c_address']; ?></td>
                    <td><?php echo $row['previous_service_date']; ?></td>
                    <td><?php echo $row['upcoming_service_date']; ?></td>
                    <td><?php echo $row['branch_id']; ?></td>
                    </tr>
                              <?php } ?>
            </table>
           

            </div>
            <div class='form'>
                <form action='first-to-second.php' method='post'>
                <div class='btn'>
                  <button name='home'>Home</button>
           </div>
           </form>
           <br  />
      <!--<div class='form'>-->
           <form action='update.php' method='post'>
           <div class='btn'>
             <button name='client_update'>Update</button>
      </div>
      </form>
      <br  />
       
       <form action='direct_add.php' method='post'>
           <div class='btn'>
             <button name='directaddc'>Add another client</button>
      </div>
      </form>

      <br  />
      <form action='delete.php' method='post'>
           <div class='btn'>
             <button name='delcdetailsBtn'>Delete a record</button>
      </div>
      </form> 
     
      
       </div>
           </body>
             
            </html>
            <?php
    mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
?>

<?php  if(isset($_POST['sbDetailsBtn'])){

$sql = "SELECT * from services_booked";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

?>
<!DOCTYPE html>
        <html lang='en'>
         
        <head>
          <meta charset='UTF-8'>
          <link rel='stylesheet' href='style2.css'>
         
          <!-- jQuery CDN Link -->
          <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
          <title>Transparent form</title>
          <style>
  body{
    background-image:url('bgfortable.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
        </head>
         
        <body>
        <div class='header'>
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
  <center><h2 style='color:white;'>SERVICES BOOKED DETAILS </h1></center>
</div>
           
          <div class='container'>


       <table style='border-collapse: collapse; color:white;'>
           <tr>
                <th>Vehicle number</th>
                 <th>Service date</th>
                 <th>Services selected</th>
                 <th>Handled by</th>
                 <th>Service status</th>
                 <th>Pickup date</th>  
            </tr>
       <?php while($row = mysqli_fetch_array($result)){ ?>
          <tr>
                 <td> <?php echo $row['vehicle_no']; ?></td>
                <td><?php echo $row['service_date'];?></td>
                <td><?php echo $row['services_selected'];?></td>
                <td><?php echo $row['handled_by'];?></td>
                <td><?php echo $row['service_status'];?></td>
                <td><?php echo $row['pickup_date'];?></td>
                </tr>
                          <?php } ?>
        </table>
        </div>
        <div class='form'>
            <form action='first-to-second.php' method='post'>
            <div class='btn'>
              <button name='home'>Home</button>
       </div>
       </form>
       <br  />
      <!--<div class='form'>-->
           <form action='update.php' method='post'>
           <div class='btn'>
             <button name='servbook_update'>Update</button>
      </div>
      </form>
      <br  />
       
       <form action='direct_add.php' method='post'>
           <div class='btn'>
             <button name='directaddsb'>Add another booking</button>
      </div>
      </form>
      
      <br  />
      <form action='delete.php' method='post'>
           <div class='btn'>
             <button name='delsbDetailsBtn'>Delete a record</button>
      </div>
      </form>
       </div>
       </body>
         
        </html>
        <?php
mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
?>






<?php  if(isset($_POST['bDetailsBtn'])){

$sql = "SELECT * from billing";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

?>
<!DOCTYPE html>
        <html lang='en'>
         
        <head>
          <meta charset='UTF-8'>
          <link rel='stylesheet' href='style2.css'>
         
          <!-- jQuery CDN Link -->
          <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
          <title>Transparent form</title>
          <style>
  body{
    background-image:url('bgfortable.jpg');
    background-size: cover;
    background-attachment: fixed;

  }
  </style>
        </head>
         
        <body>
        <div class='header'>
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
  <center><h2 style='color:white;'>BILLING DETAILS </h1></center>
</div>
           
          <div class='container'>


       <table style='border-collapse: collapse; color:white;'>
           <tr>
                <th>Vehicle number</th>
                 <th>Service bill</th>
                 <th>Mode of payment</th>
                 <th>Payment status</th>
                 <th>Delivery status</th>
                  
                  
            </tr>
       <?php while($row = mysqli_fetch_array($result)){ ?>
          <tr>
                 <td> <?php echo $row['vehicle_no']; ?></td>
                <td><?php echo $row['service_bill'];?></td>
                <td><?php echo $row['mode_of_payment'];?></td>
                <td><?php echo $row['payment_status'];?></td>
                <td><?php echo $row['delivery_status'];?></td>

                </tr>
                          <?php } ?>
        </table>
        </div>
        <div class='form'>
            <form action='first-to-second.php' method='post'>
            <div class='btn'>
              <button name='home'>Home</button>
       </div>
       </form>
       <br  />
      <!--<div class='form'>-->
           <form action='update.php' method='post'>
           <div class='btn'>
             <button name='billing_update'>Update</button>
      </div>
      </form>
      <br  />
       
       <form action='direct_add.php' method='post'>
           <div class='btn'>
             <button name='directaddbi'>Add another billing</button>
      </div>
      </form>
      <br  />
      <form action='delete.php' method='post'>
           <div class='btn'>
             <button name='delbbDetailsBtn'>Delete a record</button>
      </div>
      </form>
       </div>
        </body>
         
        </html>
        <?php
mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
?>



<?php  if(isset($_POST['addcdetailsBtn'])) { ?>
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
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
<center><h2 style='color:white;'>ADD CUSTOMER DETAILS</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='add.php' method='post'>
<div class="formGroup">
    	<span class='label' for='cname'>Customer Name:</span>
        <input type='text' id='cname'  name='c_name' required autocomplete='off'>
        
        </div>
    

	
    <div class="formGroup">
    	<span class='label' for='vehiclenumber'>Vehicle no:</span>
        <input type='text' name='vehicle_no' pattern='^[a-zA-Z][a-zA-Z]\d\d[a-zA-Z]\d\d\d\d$' title='Enter valid vehicle number! format example:AA11A1111 '  id='vehicleno' required autocomplete='off'>
        </div>
    
    
    <div class="formGroup">
    <span class='label' for='vehiclemodel'>Vehicle model:</span>
        <input type='text' name='vehicle_model' id='vehiclemodel' required autocomplete='off'>
        </div>
    
    
    <div class="formGroup">
    <span class='label' for='cphonenumber'>Phone number:</span>
        <input type='text' name='c_phone_number' id='cphonenumber' required autocomplete='off'>
        </div>
    

    
    <div class="formGroup">
    <span class='label' for='caddress'>Address :</span>
        <input type='text' name='c_address' id='caddress' required autocomplete='off'>
        </div>
    

<div class="formGroup">
<span class='label' for='previous_service_date'>Previous service date :</span>
        <input type='date' name='previous_service_date' id='previous_service_date'  autocomplete='off'>
        </div>
    
<div class="formGroup">
<span class='label' for='upcoming_service_date'>Upcoming service date :</span>
        <input type='date' name='upcoming_service_date' id='upcoming_service_date' required autocomplete='off'>
        </div>
    


<div class="formGroup">
<span class='label' for='branch_id'>Branch ID:</span>
        <input type='text' name='branch_id' id='branch_id' required autocomplete='off'>
</div>
<div class="formGroup">
          <button type='submit' class='btn2' name='customer_submit' >add customer details</button>
          </div>
</form>
</br  >
<form action='first-to-second.php' method='post'>
            <div class="formGroup">
          <button type='submit' class='btn2' name='home' >home</button>
           </div>
           </form>
<br />


</div>
</div>
</div>
</body>
</html>




<?php }?>

<?php  if(isset($_POST['addbrDetailsBtn'])) { ?>
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
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
<center><h2 style='color:white;'>ADD BRANCH DETAILS</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='add.php' method='post'>


<div class="formGroup">
    	<span class='label' for='branch_id'>Branch ID:</span>
        <input type='text' id='bid'  name='branch_id' pattern='^[bB][1-9]$' title='Follow valid format.. B followed by branch number! example:B1' required autocomplete='off'>
        
        </div>
    

	
    <div class="formGroup">
    	<span class='label' for='b_address'>Branch address:</span>
        <input type='text' name='b_address' id='baddress' required autocomplete='off'>
        </div>
    
    
    <div class="formGroup">
    <span class='label' for='bphonenumber'>Contact number:</span>
        <input type='text' name='b_contact_no' id='bphonenumber' pattern='(\+91)?\d\d\d\d\d\d\d\d\d\d' required autocomplete='off'>
        </div>
<div class="formGroup">
          <button type='submit' class='btn2' name='branch_submit' >Add branch details</button>
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


<?php  if(isset($_POST['addsDetailsBtn'])) { ?>
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
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
<center><h2 style='color:white;'>ADD SERVICES DETAILS</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='add.php' method='post'>


<div class="formGroup">
    	<span class='label' for='services'>Service title:</span>
        <input type='text' id='services'  name='services' required autocomplete='off'>
        
        </div>
    

	
    <div class="formGroup">
    	<span class='label' for='price'>Price:</span>
        <input type='text' name='price' id='price' required autocomplete='off'>
        </div>
    
    
    
<div class="formGroup">
          <button type='submit' class='btn2' name='service_submit' >Add new service</button>
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


<?php  if(isset($_POST['addwDetailsBtn'])) { ?>
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
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
<center><h2 style='color:white;'>ADD WORKER DETAILS</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='add.php' method='post'>
<div class="formGroup">
    	<span class='label' for='branchid'>Branch ID:</span>
        <input type='text' id='branchid'  name='branch_id' required autocomplete='off'>
        
        </div>
    

	
    <div class="formGroup">
    	<span class='label' for='w_name'>Employee name:</span>
        <input type='text' name='w_name' id='wname' required autocomplete='off'>
        </div>
    
    
    <div class="formGroup">
    <span class='label' for='employee_id'>Employee ID:</span>
        <input type='text' name='employee_id' id='employeeid' required autocomplete='off'>
        </div>
    
    
    <div class="formGroup">
    <span class='label' for='designation'>Designation:</span>
        <input type='text' name='designation' id='designation' required autocomplete='off'>
        </div>
    

    
    <div class="formGroup">
    <span class='label' for='w_contact_no'>Contact number:</span>
        <input type='text' name='w_contact_no' id='w_contact_no' required autocomplete='off'>
        </div>
    

<div class="formGroup">
<span class='label' for='w_password'>Password:</span>
        <input type='text' name='w_password' id='w_password' required autocomplete='off'>
        </div>
    

<div class="formGroup">
          <button type='submit' class='btn2' name='worker_submit' >Add worker details</button>
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


<?php  if(isset($_POST['addsbDetailsBtn'])) { ?>
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
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
<center><h2 style='color:white;'>ADD SERVICES BOOKED DETAILS</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='add.php' method='post'>


	
    <div class="formGroup">
    	<span class='label' for='vehicle_no'>Vehicle no:</span>
        <input type='text' name='vehicle_no' pattern='^[a-zA-Z][a-zA-Z]\d\d[a-zA-Z]\d\d\d\d$' title='Enter valid vehicle number! format example:AA11A1111 ' id='vehicle_no' required autocomplete='off'>
        </div>
    
    
    <div class="formGroup">
    <span class='label' for='service_date'>Service date:</span>
        <input type='date' name='service_date' id='service_date' required autocomplete='off'>
        </div>
    
    
    <div class="formGroup">
    <span class='label' for='services_selected'>Services selected:</span>
        <input type='text' name='services_selected' id='services_selected' required autocomplete='off'>
        </div>
    

    
    <div class="formGroup">
    <span class='label' for='handled_by'>Handled by:</span>
        <input type='text' name='handled_by' id='handled_by' required autocomplete='off'>
        </div>
    

<div class="formGroup">
<span class='label' for='service_status'>Service status:</span>
        <input type='text' name='service_status' id='service_status' required autocomplete='off'>
        </div>
    
        <div class="formGroup">
<span class='label' for='pickup_date'>Pickup date:</span>
        <input type='date' name='pickup_date' id='pickup_date' required autocomplete='off'>
        </div>
    

<div class="formGroup">
          <button type='submit' class='btn2' name='sbsubmit' >Add services booked details</button>
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


<?php  if(isset($_POST['addbDetailsBtn'])) { ?>
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
<center>	<h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
<center><h2 style='color:white;'>ADD BILLING DETAILS</h2></center>
</div>
<div class="container">
<div class="form">
<div class="btn">
<form action='add.php' method='post'>
<div class="formGroup">
    	<span class='label' for='vehicle_no'>Vehicle number:</span>
        <input type='text' id='vehicle_no'  name='vehicle_no' required autocomplete='off'>
        
        </div>
    

	
    <div class="formGroup">
    	<span class='label' for='service_bill'>Service bill:</span>
        <input type='text' name='service_bill' id='service_bill' required autocomplete='off'>
        </div>
    
    
    <div class="formGroup">
    <span class='label' for='mode_of_payment'>Mode of payment:</span>
        <input type='text' name='mode_of_payment' id='mode_of_payment' required autocomplete='off'>
        </div>
    
    
    <div class="formGroup">
    <span class='label' for='payment_status'>Payment status:</span>
        <input type='text' name='payment_status' id='payment_status' required autocomplete='off'>
        </div>
    

    
    <div class="formGroup">
    <span class='label' for='delivery_status'>Delivery status:</span>
        <input type='text' name='delivery_status' id='delivery_status' required autocomplete='off'>
        </div>
    


    

<div class="formGroup">
          <button type='submit' class='btn2' name='bbsubmit' >Add billing details</button>
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







<?php
 
// close connection
mysqli_close($link);
?>