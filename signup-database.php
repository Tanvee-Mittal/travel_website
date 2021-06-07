 <html>
    <head>
        <title> signup database</title>
</head>
<body>
    <?php
    $CONNECTION = mysqli_connect("localhost","root","","users");
    if(!$CONNECTION)
    {
        die("couldnt connect");
    }
    echo "connected successfully";
    //header("Location:index.html");
    
    

//*******************CREATING DATABASE********************

/*$sql_query = "CREATE DATABASE users";
mysqli_query($CONNECTION,$sql_query);
mysqli_close($CONNECTION);*/

// *******************CREATING TABLE**********************

    /*$sql_query="create table useraccounts(
        FirstName VARCHAR(100),
        LastName VARCHAR(100),
        Email VARCHAR(100) primary key,
        Password VARCHAR(50))";
    mysqli_query($CONNECTION,$sql_query);
    echo "Table created successfully";
    mysqli_close($CONNECTION);*/


    $Firstname  =$_POST["firstname"];
    $Lastname   =$_POST["lastname"];
    $Email      =$_POST["email"];
    $Password   =$_POST["password"];

    //******************INSERTING VALUES********************
$insert = "insert into useraccounts(firstname,lastname,email,password)values('$Firstname','$Lastname','$Email','$Password')";
if(mysqli_query($CONNECTION,$insert))
{
    echo '<script> alert ("Signup Succesfull");</script>';
    header ("Location: index.html?status=success");
    

}
else{
    echo "error inserting:".mysqli_error($CONNECTION);
}
?>
</body>
</html>