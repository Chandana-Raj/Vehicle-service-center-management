<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vsc");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//vehicle_no from login 
$vno=$_SESSION['vno'];


//branch details
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
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
  <center><h2 style='color:white;'>BRANCH DETAILS</h1></center>
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
              <button name='home2'>Home</button>
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




<?php 

//service details
if(isset($_POST['sDetailsBtn'])){
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
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
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
             <button name='home2'>Home</button>
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





<?php
//client details
if(isset($_POST['cDetailsBtn'])){

    $sql = "SELECT * from clients where vehicle_no='$vno'";
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
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
  <center><h2 style='color:white;'>CUSTOMER DETAILS. </h1></center>
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
                  <button name='home2'>Home</button>
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

<?php 

//services booked deatils
if(isset($_POST['sbDetailsBtn'])){

$sql = "SELECT * from services_booked where vehicle_no='$vno'";
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
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
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
              <button name='home2'>Home</button>
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






<?php 
//billing details
if(isset($_POST['bDetailsBtn'])){

$sql = "SELECT * from billing where vehicle_no='$vno'";
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
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
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
              <button name='home2'>Home</button>
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
