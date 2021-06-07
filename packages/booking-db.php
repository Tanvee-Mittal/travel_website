<html>
    <head>
        <title> Booking</title>
</head>
<body>
    <?php
    $CONNECTION = mysqli_connect("localhost","root","","bookings_db");
    if(!$CONNECTION)
    {
        die("couldnt connect");
    }
    //echo "Booking successfull";



    /*******************CREATING DATABASE********************/

/*$sql_query = "CREATE DATABASE bookings_db";
mysqli_query($CONNECTION,$sql_query);
mysqli_close($CONNECTION);*/


// *******************CREATING TABLE**********************/
/*$sql_query="create table bookings_db_table(
        Name VARCHAR(100),
        Email VARCHAR(100),
        Phoneno VARCHAR(100) primary key,
        Adults  VARCHAR(50),
        Credit VARCHAR(10))";
        
    mysqli_query($CONNECTION,$sql_query);
    echo "Table created successfully";
    mysqli_close($CONNECTION);*/

    $Name  =$_POST["name"];
    $Email  =$_POST["email"];
    $Phone    =$_POST["phoneno"];
    $Adults   =$_POST["adults"];
    $Credit   =$_POST["credit"];
    
      //******************INSERTING VALUES********************
$insert = "insert into bookings_db_table(name,email,phoneno,adults,credit)values('$Name','$Email','$Phone','$Adults','$Credit')";
if(mysqli_query($CONNECTION,$insert))
{
    echo '<script> 
    alert ("Booking Succesfull");
    window.location.href = "spiti.html";
    </script>';
   // header ("Location: spiti.html?status=success");
 
    

}
else{
    echo "error inserting:".mysqli_error($CONNECTION);
}
 
?>
<!--<script type="text/javascript"> 
    alert("review your answer"); 
    window.location.href = "spiti.html";
</script>;-->


</body>
</html>