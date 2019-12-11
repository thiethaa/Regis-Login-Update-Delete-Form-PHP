<?php 
//show to nav bar
if(isset($_SESSION['username'])!="") {
    header("Location: index.php");
}
include('validation.php');
require 'header.php';
?>
<body>
<div class="wrapper">
        <nav>
            <div class="logo">LOGO</div>
            <div class="menu">
                <ul>
                    <li ><a href="register.php">Sign Up</a></li>
                </ul>
            </div>
        </nav>

    <div class="container">

        <form method="POST" action="login.php">
        <fieldset>
            <legend class="header">SIGN IN</legend>

<!-- display error message here -->
            <?php include('errors.php');?>

            <div class="input-group">
            <label><i class="fas fa-user"></i> Username:</label>
            <input type="text" name="username">
            </div>

            <div class="input-group">
            <label><i class="fas fa-lock"></i> Password:</label>
            <input type="password" name="password">
            </div>

            <div class="input-group">
                <button type="submit" class="btn" name="login">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign Up</a>
            </p>
            </fieldset>
        </form>
    </div>
</div>  
  
</body>
</html>