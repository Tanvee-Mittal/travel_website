<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="get_started.css">
    </head> 
   <body>
  <div class="login">
   <ul>
    <li><b><a href="index.html">Home</b></a></li>
    <li><b><a href="news.asp">News </b></a></li>
    <li><b><a href="contact.html">Contact </b></a></li>
    <li><b><a href="about.html">About </b></a></li>   
    <li ><b><a href="login.php">Login </b></a></li>
  </ul>
</div>
  <div class="signup">
  <ul>
    <li><a href="signup.php"></a></li>
  </ul>
</div>
<form id="useraccount" action="signup-database.php" method="post">
  <br><br>
            
            <h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create New Account </h1><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="firstname"><b>First Name</b></label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="firstname" required style="background-color:#e8e8e4;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="lastname"><b>Last Name</b></label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lastname" required style="background-color:#e8e8e4;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="email"><b>Email Address</b></label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" required style="background-color:#e8e8e4;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="password"><b>password</b></label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" required style="background-color:#e8e8e4;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="create" value="Signup">
            &nbsp; <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Already have an account?<a href="login.php">&nbsp;&nbsp;
            &nbsp;Login</a>
        
    </form>
   </body>
</html>