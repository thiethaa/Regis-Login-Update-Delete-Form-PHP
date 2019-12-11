<?php  
include('validation.php');
require 'header.php';
?>

<body>
<div class="wrapper">
       
        <nav>
            <div class="logo">LOGO</div>
            <div class="menu">
                <ul>
                    <li ><a href="login.php">Sign In</a></li>  
                </ul>
            </div>
        </nav>

            <div class="container">
        <form method="POST" action="register.php" enctype="multipart/form-data">
        <fieldset>
            <legend class="header">SIGN UP</legend>

            <!-- display error message here -->
            <?php include('errors.php');?>
          
            <div class="center">
                <img id="uploadPreview" src="images/icon.png" class="avatar"><br>
                <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage()">
                </div>
            
            <div class="flex">
                <div id="fname_div">
                <label id="left"><i class="fas fa-user"></i> First Name </label><br>
                <input type="text" id="left" name="fname"value=""> 
                </div>
                <div id="lname_div"> 
                <label id="right"><i class="fas fa-user"></i> Last Name </label><br>
                <input type="text" id="right" name="lname" value="">   
                </div>
            </div>
            
            <div class="input-group" id="username_div">
                <label><i class="fas fa-user"></i> Username </label><br>
                <input type="text" id="username" name="username" value="">
            </div>

            <div class="input-group" id="email_div">
                <label><i class="fas fa-envelope"></i> Email Address </label><br>
                <input type="email" id="email" name="email" value="">
            </div>

            <div class="flex">
                <div id="password_div">
                    <label id="left"><i class="fas fa-lock"></i> Password </label><br>
                    <input type="password" id="left" class="password" name="password"> 
                </div>    
                <div id="cpassword_div"> 
                    <label id="right"><i class="fas fa-lock"></i>Confirm Password</label><br>
                    <input type="password" id="right"  class="cpassword" name="cpassword" > 
                </div>
            </div>

            <div class="input-group" id="calender_div">
                <label><i class="fas fa-calendar"></i> Date of Birth </label><br>
                <input type="date" id="dob" name="dob">
            </div>

            <div class="inline-input">
                <label>Gender </label>
                
                <input type="radio" id ="male" name="gender" value="M" ><label>Male</label>
                <input type="radio" id ="female" name="gender" value="F" ><label>Femle</label>
                <input type="radio" id ="other" name="gender" value="O" ><label>Other</label>
            </div>

            <div class="inline-input">
                <label> Hobbies </label>
                <input type="checkbox" id="travel" name="hobby[]" value="travel"><label>Travel</label>
                <input type="checkbox" id="sport" name="hobby[]" value="sport" ><label>Sport</label>
                <input type="checkbox" id="music" name="hobby[]" value="music" ><label>Music</label>
            </div>

            <div class="input-group" id="address_div">
                <label><i class="fas fa-address-card"></i> Address </label><br>
                <input type="text" id="address" name="address">
            </div>

            <div class="flex">
                <div class="input" id="left">
                    <label><i class="fas fa-flag"></i>Country </label><br>
                    <select id="input" name="country" onchange="random_function()">
                        <option>Select Country</option>
                        <option>INDONESIA</option>
                        <option>USA</option>
                    </select>
                </div>
                <div class="output" id="right">
                    <label><i class="fas fa-city"></i>State/City</label><br>  
                    <select  id="output" name="city" 
                    onfocus='if(this.options.length > 3){ this.size = 3; }' 
                    onblur='this.size=1;' 
                    onchange='this.size=1; 
                    this.blur();'>
                    <option >State/City</option>
                    </select>      
                </div>
            </div> 

            <div class="flex" id="phone_div">
                    <label><i class="fas fa-phone"></i> Phone</label>
                    <select name="phonecode" class="left">
                        <option value="1">+1</option>
                        <option value="62">+62</option>
                    </select>
                    <input type="number" id="phone" name="phone">
                </div>


            <div class="input-group">
                <button type="submit" class="btn" name="register">Register</button>
            </div>
                <p>
                    Already a member? <a href="login.php">Sign In</a>
                </p>
        </form>
    </fieldset>
    </div>
</div>

<script src="php.js"></script>
</body>
</html>