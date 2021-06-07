<!Doctype html>
<html>
    <head>
        <title>Sign-up Form</title>
        <link rel="stylesheet" href="book-now-hotel.css">
       
    </head>
<body>
<div>
        <?php
        if(isset($_POST['create'])){
            echo 'signed up successfully.';
        }
        ?>
    <div>
<div class="back">
    <a href="liveanywhere.html">Back</a>
    </div>
    <div class="form">
    <form id="hotel_booking" action="book-now-hotel-db.php" method="post">
        <label for="fname">First Name:</label>
            <input type="text" name="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" name="lname" required><br>

            <label for="email">Email:  &nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" name="email" required><br>

            <label for="phone">Phone:  &nbsp&nbsp&nbsp&nbsp</label>
            <input type="tel" name="phone" required><br>

            <label for="room">Room Type:&nbsp</label>
            <select name="room" required>
            <option value="" disabled selected hidden>Please select</option>
            <option value="One_room_set">One Room Set</option>
            <option value="Two_room_set">Two Room Set</option>
            <option value="Twin_Room_set">Two Room Set</option>
            </select>
            <br><br>

            <label for="Guests">Number of Guests: &nbsp&nbsp</label> 
            <input type="text" name="guests" required><br>

            <label for="date1">Arrival Date & Time:</label>
            <input type="date"  name="date" required>

            <input type="time"  name="time"  ><br><br>

            <label for="pay">Payment Method: &nbsp&nbsp&nbsp&nbsp</label>
            <select name="pay" required>
            <option value="" disabled selected hidden>Please select</option>
            <option value="credit">Credit Card</option>
            <option value="debit">Debit Card</option>
            <option value="upi">UPI</option>
            </select>
            <br><br>
            <label for="payment">Enter Details &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input Type="number" name="payment" required><br><br>


            <input type="submit" name="create" value="Book Now">

            </form>
</body>


</html>

