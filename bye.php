<?php 
include('validation.php');
require 'header.php';

?>
<body>

        <nav>
            <div class="logo">LOGO</div>
            <div class="menu">
                <ul> 
                <li><a href="register.php">Sign Up</a></li>
                </ul>
            </div>
        </nav>
>
    <div class="welcome">
    <fieldset>
    <legend class="header" style="text-align:left;">GOOD BYE</legend>
      
        <?php if(isset($_GET['message'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_GET['message'];
                    ?>
                </h3>
            </div>
            <?php endif ?>
      
            <p><a onMouseOver="this.style.color='white'"onMouseOut="this.style.color='purple'"href="register.php"style="font-weight:bold;color:purple;text-decoration:none;"><i class="fas fa-sign-out-alt"></i>OK</a>
            </p>
    </fieldset>
    </div>

</body>
</html>