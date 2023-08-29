<?php
 session_start();
 $link= mysqli_connect("localhost","root","","vsc");

 if(isset($_POST['update_serv_details'])){
    $name = $_POST['serv_name'];

    $price = $_POST['serv_price'];

    $query =  "UPDATE services SET price='$price' WHERE services='$name' ";
    

    if(mysqli_query($link, $query)){
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
  <center><h2 style='color:white;'>UPDATE SERVICE DETAILS </h1></center>
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
             <button name='directaddss'>Add Another service</button>
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
}else{
    echo"could not update primary data missing $query";
}
 }







 if(isset($_POST['update_branch_details'])){
    $id = $_POST['branch_id'];
    $id=strtoupper($id);
    $address = $_POST['branch_address'];

    $phone = $_POST['b_contact_no'];

    $query =  "UPDATE branches SET b_contact_no='$phone',b_address='$address' WHERE branch_id='$id' ";
    

    if(mysqli_query($link, $query)){
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
  <center><h2 style='color:white;'>UPDATE BRANCH DETAILS </h1></center>
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

if(isset($_POST['update_worker_details'])){
   $id = $_POST['emp_id'];
    
   $name = $_POST['w_name'];
    
    $phone = $_POST['w_contact_no'];

    
    $query =  "UPDATE workers_details SET w_name='$name',w_contact_no='$phone' WHERE employee_id='$id'";
    
    if(mysqli_query($link, $query)){
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
  <center><h2 style='color:white;'>UPDATE WORKER DETAILS </h1></center>
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
    
    
    if(isset($_POST['update_sbooked_details'])){
        $id = $_POST['vehicle_id'];
    
        $sdate = $_POST['serv_date'];
    
        $status = $_POST['serv_status'];
    
        $pdate = $_POST['pick_date'];
    
        $query =  "UPDATE services_booked SET service_date='$sdate',service_status='$status',pickup_date='$pdate' WHERE vehicle_no='$id' ";

        if(mysqli_query($link, $query)){
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
                    <div class='header'>
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
  <center><h2 style='color:white;'>UPDATE SERVICES BOOKED DETAILS </h1></center>
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
                          <button name='home'>home</button>
                   </div>
                   </form>
                   <br  />
          <!--<div class='form'>-->
               <form action='update.php' method='post'>
               <div class='btn'>
                 <button name='sbooked_update'>update</button>
          </div>
          </form>
          <br  />
       
       <form action='direct_add.php' method='post'>
           <div class='btn'>
             <button name='directaddsb'>add another booking</button>
      </div>
      </form>
      
      <br  />
      <form action='delete.php' method='post'>
           <div class='btn'>
             <button name='delsbDetailsBtn'>delete a record</button>
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
        
        if(isset($_POST['update_billing_details'])){
            $id = $_POST['vehicle_id'];
        
            $pstatus = $_POST['pay_status'];
        
            $dstatus = $_POST['del_status'];
        
        
            $query =  "UPDATE billing SET payment_status='$pstatus',delivery_status='$dstatus' WHERE vehicle_no='$id' ";
            if(mysqli_query($link, $query)){
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
                        <div class='header'>
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
  <center><h2 style='color:white;'>UPDATE BILLING DETAILS </h1></center>
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
             <button name='directaddbi'>Add another bill</button>
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

if(isset($_POST['update_client_details'])){
            $id = $_POST['vehicle_id'];
        
            $name = $_POST['client_name'];
        
            $address = $_POST['client_address'];

            $phone = $_POST['client_contact_no'];

            $date = $_POST['ups_date'];
        
        
            $query =  "UPDATE clients SET c_name='$name',c_address='$address',c_phone_number='$phone',upcoming_service_date='$date' WHERE vehicle_no='$id' ";
            if(mysqli_query($link, $query)){
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
  <center><h2 style='color:white;'>UPDATE CUSTOMERS DETAILS </h1></center>
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
            }