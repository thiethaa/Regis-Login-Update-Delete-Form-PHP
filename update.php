<?php 
include('validation.php');
require 'header.php';

	if(!loggedin()){
		header('location:login.php');
    }
    $user = getUser();
?>
<body>
<div class="wrapper">
        <nav>
            <div class="logo">LOGO</div>
            <div class="menu">
                <ul style="list-style :none;"> 
                <li><a href="?logout">Logout</a></li>
                <?php if (isset($user['username'])){?>
                <li><a href="profile.php">Profile</a></li>
                <?php } ?>
                </ul>
            </div>
        </nav>

    <div class="welcome">
            <!-- updating -->
            <form class="updateform" method="POST" action="update.php" enctype="multipart/form-data">
                <div class="profileupdate">
                    <img id="uploadPreview" class="avatar" src=" <?php echo $user["imglink"];?>"><br>
                    <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage()"><br>
                </div><br></b>
                <div class="infoupdate">
            <!-- display error message here -->
                    <?php include('errors.php');?>
                    <p><?php echo $user["email"];?></p><br>
                    <input type="text" id="username" name="username" value="<?php echo $user['username']?>" placeholder="Change Username"><br>
                    <input type="text" id="fname" name="fname" value="" placeholder="Change First Name"><br>
                    <input type="text" id="lname" name="lname" value="" placeholder="Change Last Name"><br>
                    <input type="text" id="address" name="address" value="" placeholder="Change Address"><br>
                    
                    <div class="flex">
                        <div class="input" style="margin-left:15px;">
                        
                            <select id="input" name="country" onchange="random_function()">
                                <option>Select Country</option>
                                <option>INDONESIA</option>
                                <option>USA</option>
                            </select>
                        </div>
                        <div class="output" id="right">
                            
                            <select  id="output" name="city" 
                            onfocus='if(this.options.length > 3){ this.size = 3; }' 
                            onblur='this.size=1;' 
                            onchange='this.size=1; 
                            this.blur();'>
                            <option >State/City</option>
                            </select>      
                        </div>
                    </div> 

                    <div class="flexphone" style="margin-left:15px;">
                            <select style="margin-right:15px;" name="phonecode">
                                <option value="1">+1</option>
                                <option value="62">+62</option>
                            </select>
                            <input type="number" id="phone2" name="phone" placeholder="Change Phone Number">
                        </div>

                    <input type="submit" name="update"class="btn2" value="Update"><br>
                    <input type="submit" name="delete"class="btn3" value="Delete an Account" onclick="return deleteMe()"><br>
                </div>
            </form>
        <div>
            <p><a onMouseOver="this.style.color='white'"onMouseOut="this.style.color='purple'"href="profile.php"style="font-weight:bold;color:purple;text-decoration:none;"><i style="color:rgb(45, 8, 104);"class="fas fa-user-circle"></i> Back to Profile</a></p>
            <p><a onMouseOver="this.style.color='white'"onMouseOut="this.style.color='purple'" href="?logout" style="font-weight:bold;color:purple;text-decoration:none;"><i style="color:rgb(45, 8, 104);" class="fas fa-sign-out-alt"></i> Logout</a></p>
        </div>
</div>
<script src="php.js"></script>
</body>
</html>