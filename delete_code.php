<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vsc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


if(isset($_POST['branch_delete_submit'])){

    $branch_id = mysqli_real_escape_string($link, $_REQUEST['branch_id']);
    $branch_id=strtoupper($branch_id);
    $sql = "DELETE FROM branches WHERE branch_id='$branch_id'";

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
           <div class='header'>
           <center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
           <center><h2 style='color:white;'>DELETE BRANCH DETAILS. </h1></center>

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
 }


 if(isset($_POST['service_delete_submit'])){
    $services = mysqli_real_escape_string($link, $_REQUEST['services']);
 
    $sql = "DELETE FROM services WHERE services='$services'";
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
            <div class='header'>
            <center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
            <center><h2 style='color:white;'>DELETE SERVICE DETAILS. </h1></center>

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
if(isset($_POST['worker_delete_submit'])){

    $employee_id = mysqli_real_escape_string($link, $_REQUEST['employee_id']);
    $employee_id=strtoupper($employee_id);
    $sql = "DELETE FROM workers_details WHERE employee_id='$employee_id'";


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
            <center><h2 style='color:white;'>DELETE WORKER DETAILS. </h1></center>

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
}
    ?>

<?php
if(isset($_POST['sb_delete_submit'])){
    
    $vehicle_no = mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);
    $service_selected = mysqli_real_escape_string($link, $_REQUEST['services_selected']);

    $sql = "DELETE FROM services_booked WHERE vehicle_no='$vehicle_no' and services_selected='$service_selected'";


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
            <center><h2 style='color:white;'>DELETE SERVICE BOOKED DETAILS. </h1></center>

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
if(isset($_POST['bb_delete_submit'])){
    
    $vehicle_no = mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);

    $sql = "DELETE FROM billing WHERE vehicle_no='$vehicle_no'";


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
            <center><h2 style='color:white;'>DELETE BILLING DETAILS. </h1></center>

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
<?php
if(isset($_POST['customer_delete_submit'])){

    $vehicle_no = mysqli_real_escape_string($link, $_REQUEST['vehicle_no']);

    $sql = "DELETE FROM clients WHERE vehicle_no='$vehicle_no'";


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
            <center><h2 style='color:white;'>DELETE CUSTOMER DETAILS. </h1></center>

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


 

