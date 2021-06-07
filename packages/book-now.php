<!Doctype html>
<html>
    <head>
        <title>Sign-up Form</title>
        <link rel="stylesheet" href="booking.css">
       
    </head>
<body>
<div class="div1">
<a href="spiti.html">Back</a>
 </div>


    <div>
        <?php
        if(isset($_POST['create'])){
            echo 'signed up successfully.';
        }
        ?>
    <div>

    <div class="head-nav">
        <img src="C:\wamp64\www\Tanvee\Travel_Website\packages\pack-images\head-nav.png">
    </div>
<div class="form">
  <form id="booking" action="booking-db.php" method="post">
            <label for="name"><b> Name</b></label>
            <input type="text" name="name" required>

            <label for="email"><b> Email</b></label>
            <input type="email" name="email" required>

            <label for="phone"><b> Phone no.</b></label>
            <input type="text" name="phoneno" required>

            <label for="adults"><b> No. of Adults</b></label>
            <input type="text" name="adults" required>
 
           
            <label for="credit"><b> Credit Card Details</b></label>
            <input type="password" name="credit" required>

            <input type="submit" name="create" value="Submit">

            </form>
     

</body>
</html>
