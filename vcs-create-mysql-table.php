<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vsc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE branches(
    branch_id varchar(2) NOT NULL PRIMARY KEY ,
    b_address VARCHAR(30) NOT NULL,
    b_contact_no bigint(10) NOT NULL unique,
    no_of_employees int default 0
)";

$sql2 = " CREATE TABLE workers_details(
    branch_id varchar(2) not null,
    w_name VARCHAR(30) NOT NULL,
    employee_id VARCHAR(6) NOT NULL primary key,
    designation varchar(30) not null,
    w_password varchar(10) not null,
    w_contact_no bigint(10) not null unique,
    foreign key(branch_id) references branches(branch_id) on delete cascade 
)";

$sql3 = " CREATE TABLE clients(
    c_name varchar(30) not null,
    vehicle_no varchar(9) not null primary key,
    vehicle_model varchar(30) not null,
    c_phone_number bigint(10) not null unique,
    c_address varchar(30) not null,
    previous_service_date date ,
    upcoming_service_date date not null,
    branch_id varchar(2) not null,
    foreign key(branch_id) references branches(branch_id) on delete cascade
)" ;

$sql4 = " CREATE TABLE services(
    services varchar(30) not null primary key,
    price int not null
)"; 

$sql5 = "CREATE TABLE services_booked(
    vehicle_no varchar(9) not null,
    service_date date not null,
    services_selected varchar(30) not null,
    handled_by varchar(30) not null,
    service_status varchar(10) not null,
    pickup_date date,
    primary key(vehicle_no,services_selected),
    foreign key(vehicle_no) references clients(vehicle_no) on delete cascade ,
    foreign key(services_selected) references services(services) on delete cascade,
    foreign key(handled_by) references workers_details(employee_id) on delete cascade
)";

$sql6 = "CREATE TABLE billing(
    vehicle_no varchar(9) not null,
    service_bill int not null,
    mode_of_payment varchar(30),
    payment_status varchar(30) not null,
    delivery_status varchar(30) not null,
    foreign key(vehicle_no) references clients(vehicle_no) on delete cascade
)";

$sql7 = "CREATE TRIGGER after_insert_employee AFTER INSERT ON
        workers_details FOR EACH ROW UPDATE branches SET no_of_employees=no_of_employees+1 WHERE branch_id=NEW.branch_id";

$sql8 = "CREATE TRIGGER after_delete_employee AFTER DELETE ON
        workers_details FOR EACH ROW UPDATE branches SET no_of_employees=no_of_employees-1 WHERE branch_id=OLD.branch_id";

if(mysqli_query($link, $sql)){
    echo "\n branches Table created successfully.\n";
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
if(mysqli_query($link, $sql2)){
    echo "\n workers_details Table created successfully.\n";
} 
else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}

if(mysqli_query($link, $sql3)){
    echo "\n clients Table created successfully.\n";
} 
else{
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link);
}

if(mysqli_query($link, $sql4)){
    echo "\n services Table created successfully.\n";
} 
else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
}

if(mysqli_query($link, $sql5)){
    echo "\n services_booked Table created successfully.\n";
} 
else{
    echo "ERROR: Could not able to execute $sql5. " . mysqli_error($link);
}

if(mysqli_query($link, $sql6)){
    echo "\n billing Table created successfully.\n";
} 
else{
    echo "ERROR: Could not able to execute $sql6. " . mysqli_error($link);
}

if(mysqli_query($link, $sql7)){
    echo " ";
} 
else{
    echo "ERROR: Could not able to execute $sql7. " . mysqli_error($link);
}

if(mysqli_query($link, $sql8)){
    echo " ";
} 
else{
    echo "ERROR: Could not able to execute $sql8. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>