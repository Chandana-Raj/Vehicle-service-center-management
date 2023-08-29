<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vsc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


 if(isset($_POST['customer_submit'])){
    $c_name = mysqli_real_escape_string($link, $_REQUEST['c_name']);
$vehicle_no = mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);
$vehicle_model = mysqli_real_escape_string($link, $_REQUEST['vehicle_model']);
$c_phone_number = mysqli_real_escape_string($link, $_REQUEST['c_phone_number']);
$c_address = mysqli_real_escape_string($link, $_REQUEST['c_address']);
$previous_service_date = mysqli_real_escape_string($link, $_REQUEST['previous_service_date']);
$upcoming_service_date = mysqli_real_escape_string($link, $_REQUEST['upcoming_service_date']);
$branch_id = mysqli_real_escape_string($link, $_REQUEST['branch_id']);
$branch_id=strtoupper($branch_id);
// attempt insert query execution
$sql = "INSERT INTO clients (c_name, vehicle_no, vehicle_model,c_phone_number,c_address,previous_service_date,upcoming_service_date,branch_id) VALUES ('$c_name', '$vehicle_no', '$vehicle_model', '$c_phone_number','$c_address','$previous_service_date','$upcoming_service_date','$branch_id')";


if(mysqli_query($link, $sql)){
    $sql2 = "SELECT * from clients";
if($result = mysqli_query($link, $sql2)){
    if(mysqli_num_rows($result) > 0){
    ?>
  <!DOCTYPE html>
            <html lang='en'>
             
            <head>
              <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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
            <body>
           <div class='header'>
           <center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
           <center><h2 style='color:white;'> CUSTOMER DETAILS. </h1></center>

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
            <div class="btn">
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
}
else{
    echo "No records matching your query were found.";
}
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 }


 if(isset($_POST['branch_submit'])){
$branch_id = mysqli_real_escape_string($link, $_REQUEST['branch_id']);
$b_address = mysqli_real_escape_string($link, $_REQUEST['b_address']);
$b_contact_no = mysqli_real_escape_string($link, $_REQUEST['b_contact_no']);

$branch_id=strtoupper($branch_id);

$sql = "INSERT INTO branches (branch_id,b_address,b_contact_no) VALUES ('$branch_id', '$b_address', '$b_contact_no')";

if(mysqli_query($link, $sql)){
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
                <th> Number of employees</th>   
                  
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
      <!--<div class='form'>-->
           <form action='update.php' method='post'>
           <div class='btn'>
             <button name='branch_update'>Update</button>
      </div>
      </form>
      <br  />
       
       <form action='direct_add.php' method='post'>
           <div class='btn'>
             <button name='directaddbr'>Add another branch</button>
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
 }

 if(isset($_POST['service_submit'])){
    $services = mysqli_real_escape_string($link, $_REQUEST['services']);
    $price = mysqli_real_escape_string($link, $_REQUEST['price']);
    
    
    // attempt insert query execution
    $sql = "INSERT INTO services (services,price) VALUES ('$services', '$price')";
    if(mysqli_query($link, $sql)){
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
        <body>
           <div class='header'>
           <center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
           <center><h2 style='color:white;'>SERVICE DETAILS. </h1></center>

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
      <!--<div class='form'>-->
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
 }

?>

<?php
if(isset($_POST['worker_submit'])){
    $branch_id = mysqli_real_escape_string($link, $_REQUEST['branch_id']);
    $w_name = mysqli_real_escape_string($link, $_REQUEST['w_name']);
$employee_id = mysqli_real_escape_string($link, $_REQUEST['employee_id']);
$designation = mysqli_real_escape_string($link, $_REQUEST['designation']);
$w_contact_no = mysqli_real_escape_string($link, $_REQUEST['w_contact_no']);
$w_password = mysqli_real_escape_string($link, $_REQUEST['w_password']);
$branch_id=strtoupper($branch_id);
$employee_id=strtoupper($employee_id);
// attempt insert query execution
$sql = "INSERT INTO workers_details (branch_id,w_name,employee_id,designation,w_contact_no,w_password) VALUES ('$branch_id', '$w_name', '$employee_id', '$designation','$w_contact_no','$w_password')";


if(mysqli_query($link, $sql)){
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
            <body>
           <div class='header'>
           <center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
           <center><h2 style='color:white;'>WORKER DETAILS. </h1></center>

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
      <!--<div class='form'>-->
           <form action='update.php' method='post'>
           <div class='btn'>
             <button name='worker_update'>Update</button>
      </div>
      </form>
      <br  />
       
       <form action='direct_add.php' method='post'>
           <div class='btn'>
             <button name='directaddw'>Add another worker</button>
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
}
    ?>




<?php
if(isset($_POST['sbsubmit'])){
    
    $vehicle_no = mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);
$service_date = mysqli_real_escape_string($link, $_REQUEST['service_date']);
$services_selected = mysqli_real_escape_string($link, $_REQUEST['services_selected']);
$handled_by = mysqli_real_escape_string($link, $_REQUEST['handled_by']);
$service_status = mysqli_real_escape_string($link, $_REQUEST['service_status']);
$pickup_date = mysqli_real_escape_string($link, $_REQUEST['pickup_date']);
$handled_by=strtoupper($handled_by);
$sql = "INSERT INTO services_booked (vehicle_no,service_date,services_selected,handled_by,service_status,pickup_date) VALUES ( '$vehicle_no', '$service_date', '$services_selected','$handled_by','$service_status','$pickup_date')";


if(mysqli_query($link, $sql)){
$sql = "SELECT * from services_booked";
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
        <body>
           <div class='header'>
           <center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
           <center><h2 style='color:white;'>SERVICES BOOKED DETAILS. </h1></center>

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
}
?>

<?php
if(isset($_POST['bbsubmit'])){
    
    $vehicle_no = mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);
$service_bill = mysqli_real_escape_string($link, $_REQUEST['service_bill']);
$mode_of_payment = mysqli_real_escape_string($link, $_REQUEST['mode_of_payment']);
$payment_status = mysqli_real_escape_string($link, $_REQUEST['payment_status']);
$delivery_status = mysqli_real_escape_string($link, $_REQUEST['delivery_status']);

$sql = "INSERT INTO billing (vehicle_no,service_bill,mode_of_payment,payment_status,delivery_status) VALUES ( '$vehicle_no', '$service_bill', '$mode_of_payment','$payment_status','$delivery_status')";


if(mysqli_query($link, $sql)){
    $sql = "SELECT * from billing";
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
        <body>
           <div class='header'>
           <center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
           <center><h2 style='color:white;'>BILLING DETAILS. </h1></center>

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
}
?>

