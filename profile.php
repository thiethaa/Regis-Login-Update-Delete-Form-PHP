<?php
include('validation.php'); 
require 'header.php';

	if(!loggedin()){
        header('location:login.php');
        exit;
    }
    $user = getUser();
?>

        <nav>
            <div class="logo">LOGO</div>
            <div class="menu">
                <ul> 
                <li><a href="?logout">Logout</a></li>
                <li style="font-size:1.2em;"><?php echo '<img style="width:22px;height:20px; border-radius:5px;"src="'.$user["imglink"].'">';?><strong style="color:white"> Welcome, <?php echo $user['username'];?></strong></li>
    
                </ul>
            </div>
        </nav>
            <div class="welcomeprofile">
                <div class="pic_base">
                    <?php echo '<img id="profile_pic" src="'.$user['imglink'].'">';?>
                    <div class="profilbox">
                    <div class="tab">
                        <button class="tablinks" onclick="openTab(event, 'About')" >About</button>
                        <button class="tablinks" onclick="openTab(event, 'Posts')"id="defaultOpen">Posts</button>
                        <button class="tablinks" onclick="openTab(event, 'Gallery')">Gallery</button>
                    </div>

                    <div id="About" class="tabcontent">
                        <h3>About:</h3>
                        <p class="infotext">First Name: <?php echo $user['fname'];?></p>
                        <p class="infotext">Last Name: <?php echo $user['lname'];?></p>
                        <p class="infotext">Date of Birth: <?php echo $user['dob'];?></p>
                        <p class="infotext">Gender: <?php echo $user['gender'];?></p>
                        <p class="infotext">Hobbies: <?php echo $user['hobby'];?></p>
                        <p class="infotext">Address: <?php echo $user['address'];?></p>
                        <p class="infotext">City: <?php echo $user['city'];?></p>
                        <p class="infotext">Country: <?php echo $user['country'];?></p>
                        <p class="infotext">Phone Number: +<?php echo $user['phonecode'].$user['phone'];?></p>
                        <p><a onMouseOver="this.style.color='white'"onMouseOut="this.style.color='purple'" href="update.php" style="font-weight:bold;color:purple;text-decoration:none;" ><i style="color:purple;"class="fas fa-tools"></i>Edit</a></p>
                    </div>

                    <div id="Posts" class="tabcontent">
                        <h3>Posts</h3>
                        <input type="text" name="post" id="post" placeholder="What's on your mind?">
                        <button id="postbtn" type="submit" class="postbtn" name="postbtn">POST</button> 
                            <ul id="postlist">
                                <li><p id="date"></p></li>
                            </ul>
                    </div>

                    <div id="Gallery" class="tabcontent">
                        <h3>Gallery</h3>
                        <div class="gallerybox">
                        <?php echo '<img style="width:250px;height:270px;" src="'.$user['imglink'].'">';?>
                        </div>
                    </div>
                </div>
            </div>
<script src="php.js"></script>
</body>
</html>