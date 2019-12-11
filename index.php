<?php 
include('validation.php');
require 'header.php';

	if(!loggedin()){
        header('location:login.php');
        exit;
    }
    $user = getUser();
?>
<body>

        <nav>
            <div class="logo">LOGO</div>
            <div class="menu">
                <ul> 
                <li><a href="?logout">Logout</a></li>
                <li style="font-size:1.2em;"><?php echo '<img style="width:22px;height:20px; border-radius:5px;"src="'.$user["imglink"].'">';?><strong style="color:white;"> Welcome, <?php echo $user['username'];?></strong></li>

                </ul>
            </div>
        </nav>
>
    <div class="welcome">
    <fieldset>
    <legend class="header" style="text-align:left;">WELCOME</legend>
        <!-- showing display pic -->
            <?php echo '<img class="avatar" src="'.$user["imglink"].'">';?>
        <!-- notification msg -->
        <?php if(isset($_GET['message'])) : ?>
            <div class="error success">
                <h3>
                    <?php 
                        echo $_GET['message'];
                    ?>
                </h3>
            </div>
            <?php endif ?>

        <!-- logged users -->
        
            <h1>Hi <strong><?php echo $user['username'];?>,<br><span style="color:rgb(174, 154, 194);">Have a Good Day!</span></h1>
            <p><a onMouseOver="this.style.color='white'"onMouseOut="this.style.color='purple'"href="profile.php"style="font-weight:bold;color:purple;text-decoration:none;"><i class="fas fa-user-circle"></i> Go to Profile</a>
            </p>
            <p><a onMouseOver="this.style.color='white'"onMouseOut="this.style.color='purple'"href="?logout"style="font-weight:bold;color:purple;text-decoration:none;"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </p>
    </fieldset>
    </div>

</body>
</html>