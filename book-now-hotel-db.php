<html>
    <head>
        <title> Booking</title>
</head>
<body>
    <?php
    $CONNECTION = mysqli_connect("localhost","root","","hotel_bookings");
    if(!$CONNECTION)
    {
        die("couldnt connect");
    }
echo "connection successfull";
   


    /*******************CREATING DATABASE********************/

/*$sql_query = "CREATE DATABASE hotel_bookings";
mysqli_query($CONNECTION,$sql_query);
mysqli_close($CONNECTION);*/


// *******************CREATING TABLE**********************/
/*$sql_query="create table hotel_bookings_table(
        FName VARCHAR(100),
        LName VARCHAR(100),
        Email VARCHAR(100),
        Phone VARCHAR(100) primary key,
        Room  VARCHAR(50),
        Guests VARCHAR(10),
        Date VARCHAR(20),
        Time VARCHAR(20),
        Pay VARCHAR(20),
        Payment VARCHAR(20))";
if(mysqli_query($CONNECTION, $sql_query))
        {
            echo"table created";
        }
else{
            echo"table is creating error".mysqli_error($CONNECTION);
        }
        
*/
       $FName  =$_POST["fname"];
        $LName  =$_POST["lname"];
        $Email  =$_POST["email"];
        $Phone    =$_POST["phone"];
        $Room   =$_POST["room"];
        $Guests   =$_POST["guests"];
        $Date   =$_POST["date"];
        $Time   =$_POST["time"];
        $Pay   =$_POST["pay"];
        $Payment   =$_POST["payment"];

//******************INSERTING VALUES********************
$insert = "insert into hotel_bookings_table(fname,lname,email,phone,room,guests,date,time,pay,payment)
values('$FName','$LName','$Email','$Phone','$Room','$Guests','$Date','$Time','$Pay','$Payment')";       
if(mysqli_query($CONNECTION,$insert))
{
    echo '<script> 
    alert ("Booking Succesfull");
    window.location.href = "bookingsucessful.html";
    </script>';
   // header ("Location: spiti.html?status=success");
 
    

}
else{
    echo "error inserting:".mysqli_error($CONNECTION);
}
 


?>
</body>
</html>