<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vsc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO branches (branch_id, b_address, b_contact_no) VALUES
            ('B1', 'Malleshwaram-Bangalore', 9878675845),
            ('B2', 'Ring Road-Hassan', 9164578900)";

$sql2 = "INSERT INTO workers_details (branch_id, w_name, employee_id, designation, w_password, w_contact_no) VALUES
            ('B1', 'Ram', 'B1M001','mechanic','mech@11', 9878675805),
            ('B1', 'Jayanth', 'B1M002', 'mechanic','mech@12',8976897127),
            ('B1', 'Sachin', 'B1A001','admin','admin@1',7349049011),
            ('B1', 'Arya', 'B1S001', 'supervisor','sup@2',7809605422),
            ('B2', 'Joseph', 'B2M001','mechanic','mech@21',8904567321),
            ('B2', 'Vinay', 'B2M002','mechanic','mech@22', 9164705020),
            ('B2', 'Anand', 'B2A001', 'admin','admin@2', 9485769356),
            ('B2', 'Keshav', 'B2S001', 'supervisor','sup@1', 7259720114)";

$sql3 = "INSERT INTO clients (c_name, vehicle_no, vehicle_model, c_phone_number, c_address, previous_service_date, upcoming_service_date, branch_id) values
             ('Ajay','KA05C1324','Access125',6758678978,'Nelamangala','2022-12-29','2023-02-09','B1'),
             ('Abhay','KA04P4536','Activa',9989567898,'Bangalore','2023-01-12','2023-02-10','B2'),
             ('Sidharth','KA13D1122','Royal Enfield',9787670011,'Hassan','2022-12-24','2023-02-02','B2'),
             ('Gopal','KA12N7100','Jupiter',9988765430,'Kodagu',null,'2023-02-04','B1'),
             ('Prashanth','KA19A0899','Yamaha',9449473322,'Mangalore',null,'2023-03-13','B2')";

$sql4 = "INSERT INTO services (services, price) values
             ('Foam wash',1000),
             ('Oil exchange',250),
             ('Paint',1500),
             ('Wheel exchange',4000),
             ('Battery recharge',2200)";

$sql5 = "INSERT INTO services_booked (vehicle_no, service_date, services_selected, handled_by,service_status,pickup_date) values
              ('KA05C1324','2022-12-29','Foam wash','B1M001','done','2022-12-30'),
              ('KA05C1324','2022-12-29','Oil exchange','B1M001','done','2022-12-30'),
              ('KA04P4536','2023-01-10','Battery recharge','B2M002','done','2023-01-12'),
              ('KA13D1122','2023-02-02','Wheel exchange','B2M001','done','2023-02-04'),
              ('KA13D1122','2023-02-03','Foam wash','B2M002','done','2023-02-04'),
              ('KA12N7100','2023-02-04','Oil exchange','B1M002','pending','2023-02-04'),
              ('KA19A0899','2023-03-13','Wheel exchange','B2M001','pending','2023-03-14')";

$sql6 = "INSERT INTO billing (vehicle_no, service_bill, mode_of_payment, payment_status,delivery_status) values
             ('KA05C1324',1250,'Online','Paid','Delivered'),
             ('KA04P4536',2200, 'Cash', 'Paid', 'Delivered'),
             ('KA13D1122',5000,'Online','Paid','out-for-delivery'),
             ('KA12N7100',250,null,'pending','pending'),
             ('KA19A0899',4000,null,'pending','pending')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully to branches.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
if(mysqli_query($link, $sql2)){
    echo "Records added successfully to workers_details.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}

if(mysqli_query($link, $sql3)){
    echo "Records added successfully to clients.";
} else{
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link);
}

if(mysqli_query($link, $sql4)){
    echo "Records added successfully to services.";
} else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
}

if(mysqli_query($link, $sql5)){
    echo "Records added successfully to services_booked.";
} else{
    echo "ERROR: Could not able to execute $sql5. " . mysqli_error($link);
}
if(mysqli_query($link, $sql6)){
    echo "Records added successfully to billing.";
} else{
    echo "ERROR: Could not able to execute $sql6. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);

?>