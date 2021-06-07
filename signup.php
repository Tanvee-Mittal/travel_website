<!Doctype html>
<html>
    <head>
        <title>Sign-up Form</title>
        <link rel="stylesheet" href="styles-signup.css">
    </head>
<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            echo 'signed up successfully.';
        }
        ?>
    <div>
    <ul>
        <li><b><a href="index.html">Home</b></a></li>
        <li><b><a href="news.asp">News </b></a></li>
        <li><b><a href="contact.asp">Contact </b></a></li>
        <li><b><a href="about.asp">About </b></a></li>   
        <li ><b><a href="login.php">Login </b></a></li>
      </ul>
        <form id="useraccount" action="signup-database.php" method="post">
            
                <h1>SignUp Form </h1>
                <label for="firstname"><b>First Name</b></label>
                <input type="text" name="firstname" required>

                <label for="lastname"><b>Last Name</b></label>
                <input type="text" name="lastname" required>

                <label for="email"><b>Email Address</b></label>
                <input type="email" name="email" required>

                <label for="password"><b>password</b></label>
                <input type="password" name="password" required>

                <input type="submit" name="create" value="signup">
            
        </form>
    </div>   

</body>
</html>
