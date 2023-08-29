<?php
session_start();
error_reporting(E_ERROR | E_PARSE);


if(isset($_POST['admin_submit'])){
    $link = mysqli_connect("localhost", "root", "", "vsc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$employeeID = mysqli_real_escape_string($link, $_REQUEST['adminId']);
$employeePassword = mysqli_real_escape_string($link, $_REQUEST['adminPassword']);
$employeeID=strtoupper($employeeID);
$sql = "SELECT designation from workers_details where employee_id='$employeeID' and w_password='$employeePassword'";// where vehicle_no='$vehicleno'";
    
if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0 ){ //&& $result=='admin'

            $titles = array();
            $titlestring = "";
            while($row = mysqli_fetch_array($result))
            {
              $titles .= $row['designation'] . ", ";
            }
            $titlestring = substr($titles, 0, -2);
            $titlestring = substr($titlestring, 5);
            
            if($titlestring=="admin"){
                echo "
                <!DOCTYPE html>
            <html lang='en'>
             
            <head>
              <meta charset='UTF-8'>
           
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
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER</h1></center>
</div>
               
              <div class='container'>
                <div class='form'>
                <form action='admin_select_add.php' method='post'>
                <div class='btn'>
                <div>
                  <button name='brDetailsBtn'>Branch Details</button>
                  <button name='addbrDetailsBtn'>Add Branch details</button>
                </div>
                <div>
                  <button name='sDetailsBtn'>Service Details</button>
                  <button name='addsDetailsBtn'>Add Services Details</button>
                  </div>
                <div>
                  
                  <button name='wDetailsBtn'>Worker Details</button>
                  <button name='addwDetailsBtn'>Add Worker Details</button>
                  </div>
                <div>
                  
                  <button name='cDetailsBtn'>Client Details</button>
                  <button name='addcdetailsBtn'>Add Client Details</button>
                  </div>
                <div>
                
                  <button name='sbDetailsBtn'>Services-booked Details</button>
                  <button name='addsbDetailsBtn'>Add Services Booked Details</button>
                  </div>
                <div>
            
                  <button name='bDetailsBtn'>Billing Details</button>
                  <button name='addbDetailsBtn'>Add Billing Details</button>
                  
                </div>

                
                 
            </form>
            <br />
            <form action='firstpage.php' method='post'>
                <div class='btn'>
                <div>
                  <button name='logout'>LOG OUT</button>
                  </div>
                  </form>
            </div>
              </div>
            </body>
             
            </html>";

            }
            elseif($titlestring=="mechanic"){
                echo "User is not an Admin";
            }
            else{
                echo "Wrong Username or Password";
            }        
    mysqli_free_result($result);
        } else{
            echo "NOT FOUND";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }


    
}

if(isset($_POST['home'])){
    $link = mysqli_connect("localhost", "root", "", "vsc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "
                <!DOCTYPE html>
            <html lang='en'>
             
            <head>
              <meta charset='UTF-8'>
             
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
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
</div>
               
              <div class='container'>
                <div class='form'>
                <form action='admin_select_add.php' method='post'>
                <div class='btn'>
                <div>
                  <button name='brDetailsBtn'>Branch details</button>
                  <button name='addbrDetailsBtn'>Add Branch details</button>
                </div>
                <div>
                  <button name='sDetailsBtn'>Services Details</button>
                  <button name='addsDetailsBtn'>Add Services Details</button>
                  </div>
                <div>
                  
                  <button name='wDetailsBtn'>Worker details</button>
                  <button name='addwDetailsBtn'>Add Worker details</button>
                  </div>
                <div>
                  
                  <button name='cDetailsBtn'>Client Details</button>
                  <button name='addcdetailsBtn'>Add Client Details</button>
                  </div>
                <div>
                
                  <button name='sbDetailsBtn'>Services-Booked Details</button>
                  <button name='addsbDetailsBtn'>Add Services Booked Details</button>
                  </div>
                <div>
            
                  <button name='bDetailsBtn'>Billing Details</button>
                  <button name='addbDetailsBtn'>Add Billing Details</button>
                  
                </div>

                 
            </form>
            <br />
            <form action='firstpage.php' method='post'>
                <div class='btn'>
                <div>
                  <button name='logout'>LOG OUT</button>
                  </div>
                  </form>
            </div>
              </div>
            </body>
            
             
            </html>";
            }

?>

<!--- tried for customer vehicle number-->
<?php

if(isset($_POST['customer_submit'])){
  $link = mysqli_connect("localhost", "root", "", "vsc");

// Check connection
if($link === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}


$vno = mysqli_real_escape_string($link, $_REQUEST['vehicle_ID']);
//$_COOKIE['vehicle_no']=$vehicle_no;
$vno=strtoupper($vno);
$_SESSION['vno']=$vno;
$sql = "SELECT * from clients where vehicle_no='$vno'";
if($result = mysqli_query($link, $sql)){
  if(mysqli_num_rows($result) > 0 ){
    echo "
                <!DOCTYPE html>
            <html lang='en'>
             
            <head>
              <meta charset='UTF-8'>
              
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
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
</div>
               
              <div class='container'>
                <div class='form'>
                <form action='customer_side_retr.php' method='post'>
                <div class='btn'>
                
                <div>
                  <button name='brDetailsBtn'>Branch details</button>
                  
                </div>
                <div>
                  <button name='sDetailsBtn'>Services Details</button>
                  
                  </div>
                
                <div>
                  
                  <button name='cDetailsBtn'>Client Details</button>
                  
                  </div>
                <div>
                
                  <button name='sbDetailsBtn'>Services-Booked Details</button>
                 
                  </div>
                <div>
            
                  <button name='bDetailsBtn'>Billing Details</button>
                  
                  
                </div>

                 
            </form>
            <br />
            <form action='firstpage.php' method='post'>
                <div class='btn'>
                <div>
                  <button name='logout'>LOG OUT</button>
                  </div>
                  </form>
            </div>
              </div>
            </body>
             
            </html>";
            mysqli_free_result($result);
        } else{
            echo "NOT FOUND";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
  }
?>

<?php if(isset($_POST['home2'])){
    $link = mysqli_connect("localhost", "root", "", "vsc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "
                <!DOCTYPE html>
            <html lang='en'>
             
            <head>
              <meta charset='UTF-8'>
              
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
	<center><h1 style='color:white;'>VEHICLE SERVICE CENTER.</h1></center>
</div>
               
              <div class='container'>
                <div class='form'>
                <form action='customer_side_retr.php' method='post'>
                <div class='btn'>
                <div>
                  <button name='brDetailsBtn'>Branch details</button>
                  
                </div>
                <div>
                  <button name='sDetailsBtn'>Services Details</button>
                  
                  </div>
              
                <div>
                  
                  <button name='cDetailsBtn'>Client Details</button>
                  
                  </div>
                <div>
                
                  <button name='sbDetailsBtn'>Services-Booked Details</button>
                  
                  </div>
                <div>
            
                  <button name='bDetailsBtn'>Billing Details</button>
                
                </div>

                 
            </form>
            <br />
            <form action='firstpage.php' method='post'>
                <div class='btn'>
                <div>
                  <button name='logout'>LOG OUT</button>
                  </div>
                  </form>
            </div>
              </div>
            </body>
            
             
            </html>";
            }

?>

