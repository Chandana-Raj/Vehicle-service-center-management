
<?php session_start();


if(isset($_POST['serv_update'])){
    $link = mysqli_connect("localhost", "root", "", "vsc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
 
  <link rel='stylesheet' href='styleforupdate.css'>
 
  <!-- jQuery CDN Link -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
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
    <div class='container'>
    <div class='form'>
    <div class='btn'>

            
             <div class='card mt-5'>
                <div class='card-header'>
                    <h4 style='color:white;'>UPDATE SERVICE DETAILS</h4>
                </div>
                <div class='card-body'>
                    <form action='update_code.php' method='POST' >

                    <div class='formGroup'>
                    <span class='label' for='service_name'>service name:</span>
                    <input type='Text' name='serv_name' required autocomplete='off'><br>
                </div>

                <div class='formGroup'>
                <span class='label' for='service_price'>service price:</span>
                     <input type='Text' name='serv_price' required autocomplete='off'><br>
                </div>

                <div class='form-group mb-3'>
                     <button type='submit' name='update_serv_details' class='btn btn-primary'>Update details</button>
                </div>
                
              </form>
              </br  >
<form action='first-to-second.php' method='post'>
            <div class='formGroup'>
          <button type='submit' class='btn2' name='home' >home</button>
           </div>
           </form>
<br />
                
            </div>
            
        </div>
        
    </div>
    </div>
    </div>




</body>
</html>";
            }


 if(isset($_POST['branch_update'])){
                $link = mysqli_connect("localhost", "root", "", "vsc");
             
            // Check connection
            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
              <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
             
              <link rel='stylesheet' href='styleforupdate.css'>
             
              <!-- jQuery CDN Link -->
              <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
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
                <div class='container'>
                <div class='form'>
                <div class='btn'>
            
                        
                         <div class='card mt-5'>
                            <div class='card-header'>
                                <h4 style='color:white;'>UPDATE BRANCH DETAILS</h4>
                            </div>
                            <div class='card-body'>
                                <form action='update_code.php' method='POST' >
            
                                <div class='formGroup'>
                                <span class='label' for='branch_id'>branch id:</span>
                                <input type='Text' name='branch_id' required autocomplete='off'><br> <!-- pattern='^[bB][1-9]$' title='invalid branch id'-->
                            </div>
            
                            <div class='formGroup'>
                            <span class='label' for='branchaddress'>branchaddress:</span>
                                 <input type='Text' name='branch_address' required autocomplete='off'><br>
                            </div>

                            <div class='formGroup'>
                            <span class='label' for='bcno'>branch contact number:</span>
                                 <input type='Text' name='b_contact_no' required autocomplete='off'><br>
                            </div>
            
                            <div class='form-group mb-3'>
                                 <button type='submit' name='update_branch_details' class='btn btn-primary'>Update details</button>
                            </div>
                            
                          </form>
                          </br  >
<form action='first-to-second.php' method='post'>
            <div class='formGroup'>
          <button type='submit' class='btn2' name='home' >home</button>
           </div>
           </form>
<br />
                            
                        </div>
                        
                    </div>
                    
                </div>
                </div>
                </div>
            
            
            
            
            </body>
            </html>";
                        }

            
if(isset($_POST['worker_update'])){
             $link = mysqli_connect("localhost", "root", "", "vsc");
                         
                   // Check connection
                     if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                          <meta charset='UTF-8'>
                          <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                         
                          <link rel='stylesheet' href='styleforupdate.css'>
                         
                          
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
                            <div class='container'>
                            <div class='form'>
                            <div class='btn'>
                        
                                    
                                     <div class='card mt-5'>
                                        <div class='card-header'>
                                            <h4 style='color:white;'>UPDATE WORKER DETAILS</h4>
                                        </div>
                                        <div class='card-body'>
                                            <form action='update_code.php' method='POST' >
                          
                                            <div class='formGroup'>
                                            <span class='label' for='employeeid'>Employee ID:</span>
                                            <input type='Text' name='emp_id' required autocomplete='off'><br>
                                        </div>
                        
                                        <div class='formGroup'>
                                        <span class='label' for='workername'>Worker name:</span>
                                             <input type='Text' name='w_name' required autocomplete='off'><br>
                                        </div>
            
                                        <div class='formGroup'>
                                        <span class='label' for='cntno'>Contact No.:</span>
                                             <input type='Text' name='w_contact_no' required autocomplete='off'><br>
                                        </div>
                        
                                        <div class='form-group mb-3'>
                                             <button type='submit' name='update_worker_details' class='btn btn-primary'>Update details</button>
                                        </div>
                                        
                                      </form>
                                      </br  >
<form action='first-to-second.php' method='post'>
            <div class='formGroup'>
          <button type='submit' class='btn2' name='home' >home</button>
           </div>
           </form>
<br />
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            </div>
                            </div>
                        
                        
                        
                        
                        </body>
                        </html>";
                                    }
                        if(isset($_POST['servbook_update'])){
                        $link = mysqli_connect("localhost", "root", "", "vsc");
                                                    
                                              // Check connection
                                                if($link === false){
                                               die("ERROR: Could not connect. " . mysqli_connect_error());
                                                   }
                                                   echo "<!DOCTYPE html>
                                                   <html lang='en'>
                                                   <head>
                                                     <meta charset='UTF-8'>
                                                     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                                                     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                                                    
                                                     <link rel='stylesheet' href='styleforupdate.css'>
                                                    
                                                     
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
                                                       <div class='container'>
                                                       <div class='form'>
                                                       <div class='btn'>
                                                   
                                                               
                                                                <div class='card mt-5'>
                                                                   <div class='card-header'>
                                                                       <h4 style='color:white;'>UPDATE SERVICES BOOKED DETAILS</h4>
                                                                   </div>
                                                                   <div class='card-body'>
                                                                       <form action='update_code.php' method='POST' >
                                                   
                                                                       <div class='formGroup'>
                                                                       <span class='label' for='vehicleid'>Vehicle No:</span>
                                                                       <input type='Text' name='vehicle_id' required autocomplete='off'><br>
                                                                   </div>
                                                   
                                                                   <div class='formGroup'>
                                                                   <span class='label' for='servdate'>Service Date:</span>
                                                                        <input type='date' name='serv_date' required autocomplete='off'><br>
                                                                   </div>
                                       
                                                                   <div class='formGroup'>
                                                                   <span class='label' for='servstat'>Service Status:</span>
                                                                        <input type='Text' name='serv_status' required autocomplete='off'><br>
                                                                   </div>
                                                                  
                                                                   <div class='formGroup'>
                                                                   <span class='label' for='pickdate'>Pickup Date:</span>
                                                                        <input type='date' name='pick_date' required autocomplete='off'><br>
                                                                   </div>
                                                   
                                                                   <div class='form-group mb-3'>
                                                                        <button type='submit' name='update_sbooked_details' class='btn btn-primary'>Update details</button>
                                                                   </div>
                                                                   
                                                                 </form>
                                                                 </br  >
<form action='first-to-second.php' method='post'>
            <div class='formGroup'>
          <button type='submit' class='btn2' name='home' >home</button>
           </div>
           </form>
<br />
                                                                   
                                                               </div>
                                                               
                                                           </div>
                                                           
                                                       </div>
                                                       </div>
                                                       </div>
                                                   
                                                   
                                                   
                                                   
                                                   </body>
                                                   </html>";
                                                               }

                                             if(isset($_POST['billing_update'])){
                                             $link = mysqli_connect("localhost", "root", "", "vsc");
                                                                                            
                                             // Check connection
                                                 if($link === false){
                                                   die("ERROR: Could not connect. " . mysqli_connect_error());
                                                            }
                                                                          echo "<!DOCTYPE html>
                                                                               <html lang='en'>
                                                                               <head>
                                                                               <meta charset='UTF-8'>
                                                                               <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                                                                               <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                                                                                            
                                                                                 <link rel='stylesheet' href='styleforupdate.css'>
                                                                                            
                                                                                <!-- jQuery CDN Link -->
                                                                                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
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
                                                                                               <div class='container'>
                                                                                               <div class='form'>
                                                                                               <div class='btn'>
                                                                                           
                                                                                                       
                                                                                                        <div class='card mt-5'>
                                                                                                           <div class='card-header'>
                                                                                                               <h4 style='color:white;'>UPDATE SERVICES BILLING DETAILS</h4>
                                                                                                           </div>
                                                                                                           <div class='card-body'>
                                                                                                               <form action='update_code.php' method='POST' >
                                                                                           
                                                                                                               <div class='formGroup'>
                                                                                                               <span class='label' for='vehicleid'>Vehicle No:</span>
                                                                                                               <input type='Text' name='vehicle_id' required autocomplete='off'><br>
                                                                                                           </div>
                                                                                           
                                                                                                           <div class='formGroup'>
                                                                                                           <span class='label' for='paystatus'>Payment Status</span>
                                                                                                                <input type='Text' name='pay_status' required autocomplete='off'><br>
                                                                                                           </div>
                                                                               
                                                                                                           <div class='formGroup'>
                                                                                                           <span class='label' for='delstatus'>Delivery Status:</span>
                                                                                                                <input type='Text' name='del_status' required autocomplete='off'><br>
                                                                                                           </div>
                                                                                           
                                                                                                           <div class='form-group mb-3'>
                                                                                                                <button type='submit' name='update_billing_details' class='btn btn-primary'>Update details</button>
                                                                                                           </div>
                                                                                                           
                                                                                                         </form>
                                                                                                         </br  >
<form action='first-to-second.php' method='post'>
            <div class='formGroup'>
          <button type='submit' class='btn2' name='home' >home</button>
           </div>
           </form>
<br />
                                                                                                           
                                                                                                       </div>
                                                                                                       
                                                                                                   </div>
                                                                                                   
                                                                                               </div>
                                                                                               </div>
                                                                                               </div>
                                                                                           
                                                                                           
                                                                                           
                                                                                           
                                                                                           </body>
                                                                                           </html>";
                                                                                                       }
                                        
if(isset($_POST['client_update'])){
             $link = mysqli_connect("localhost", "root", "", "vsc");
                         
                   // Check connection
                     if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                          <meta charset='UTF-8'>
                          <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                         
                          <link rel='stylesheet' href='styleforupdate.css'>
                         
                          
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
                            <div class='container'>
                            <div class='form'>
                            <div class='btn'>
                        
                                    
                                     <div class='card mt-5'>
                                        <div class='card-header'>
                                            <h4 style='color:white;'>UPDATE CLIENTS DETAILS</h4>
                                        </div>
                                        <div class='card-body'>
                                            <form action='update_code.php' method='POST' >
                          
                                            <div class='formGroup'>
                                            <span class='label' for='vehicleid'>Vehicle No:</span>
                                            <input type='Text' name='vehicle_id' required autocomplete='off'><br>
                                        </div>
                        
                                        <div class='formGroup'>
                                        <span class='label' for='clientname'>Client name:</span>
                                             <input type='Text' name='client_name' required autocomplete='off'><br>
                                        </div>

                                        <div class='formGroup'>
                                        <span class='label' for='clientadd'>Address</span>
                                             <input type='Text' name='client_address' required autocomplete='off'><br>
                                        </div>
            
                                        <div class='formGroup'>
                                        <span class='label' for='cntno'>Contact No.:</span>
                                             <input type='Text' name='client_contact_no' required autocomplete='off'><br>
                                        </div>

                                        <div class='formGroup'>
                                        <span class='label' for='upcsdate'>Upcoming service date:</span>
                                             <input type='date' name='ups_date' required autocomplete='off'><br>
                                        </div>
                        
                                        <div class='form-group mb-3'>
                                             <button type='submit' name='update_client_details' class='btn btn-primary'>Update details</button>
                                        </div>
                                        
                                      </form>
                                      </br  >
<form action='first-to-second.php' method='post'>
            <div class='formGroup'>
          <button type='submit' class='btn2' name='home' >Home</button>
           </div>
           </form>
<br />
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            </div>
                            </div>
                        
                        
                        
                        
                        </body>
                        </html>";
                                    }



?>