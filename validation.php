<?php
session_start();
require 'functions.php';
require 'config.php';
//initializing variable error
$errors = array();
$username = "";
$email = "";


//---register Users
if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $dob = $_POST['dob'];
//gender
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }else{
        $gender = "";#default value
    }
//hobby
    if(isset($_POST['hobby'])){
        $hobby = $_POST['hobby'];
    }else{
        $hobby = "";#default value
    }
    $hobbies="";
        if(is_array($hobby)){
            foreach($hobby as $checkboxhobby){
                $hobbies .= $checkboxhobby.",";
            }
        }

    $address = $_POST['address'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $phonecode = $_POST['phonecode'];
    $phone = $_POST['phone'];
//image
     $img_name = $_FILES['imglink']['name'];
     $img_size = $_FILES['imglink']['size'];
     $img_tmp = $_FILES['imglink']['tmp_name'];
     
     $directory = 'uploads/';
     $target_file = $directory.$img_name;

//validate the form
    if(empty($fname)||empty($lname)||empty($username)||empty($password)||empty($email)||empty($dob)||empty($gender)||empty($hobbies)||empty($address)||empty($phonecode)||empty($phone)){
        $errors[] ="All fields are required!";
    }
    if($password != $cpassword){
        $errors[] ="Both passwords did not match!";
    }

//validate image format
    if($img_size>2097152){
        $errors[] ="Image Size larger than 2 MB!";
    }

//check if username & || email already exist
    $user_check_query = "SELECT * FROM member WHERE username = '$username' or email = '$email' LIMIT 1";
    $result = mysqli_query($db,$user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){//already || email already exist
    if($user['username'] === $username){
        $errors[] ="Username is already exists!";
        } 
    if($user['email'] === $email){
        $errors[] ="Email is already exists!";
        }
    }
    
//if no error 
   if(count($errors)== 0){
    $password = md5($password);//encrypt the password
  
    $query = "INSERT INTO `member`(`fname`, `lname`, `username`, `email`, `password`, `dob`,`gender`, `hobby`,`address`,`country`, `city`, `phonecode`, `phone`, `imglink`) VALUES ('$fname','$lname','$username','$email','$password','$dob','$gender','$hobbies','$address','$country','$city','$phonecode','$phone', '$target_file')";
    
    //print_r($query);
    mysqli_query($db, $query);
    if(!mysqli_error($db)){
        $user_id = mysqli_insert_id($db);
        //store the images dp
        if($img_tmp) move_uploaded_file($img_tmp, $target_file);

        //show it to homepage
        set_user_session($user_id);
        header('location:index.php?message='.urlencode("You are Logged in"));
        exit;
            
    }else{
        $errors[] = "An error has occured. ".mysqli_error($db);
        }
    }
}
//----LOGIN USERS
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)){
            $errors[] = "Username is required!";
        }
        if(empty($password)){
            $errors[] ="Password is required!";
        }

        if(count($errors) == 0){
            $password = md5($password);//encrypt the password
            $query = "SELECT id FROM member WHERE username = '$username' AND password = '$password'";
            
            $user = get_row($query);
            if($user){
                set_user_session($user['id']);
                header('location:index.php?message='.urlencode("You are Logged in"));
            }else{
                $errors[] ="Invalid username/password!";
            }
        }
    }
//----logout
    if(isset($_GET['logout'])){
        destroy_user_session();
        header('location: login.php');
        exit;
    }
//----updating data
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $phonecode = $_POST['phonecode'];
        $phone = $_POST['phone'];
        //$remove_image = $_POST['remove_image'];
        //image
        $img_name = $_FILES['imglink']['name'];
        $img_size = $_FILES['imglink']['size'];
        $img_tmp = $_FILES['imglink']['tmp_name'];
        //image folder
        $directory = 'uploads/';
        $target_file = $directory.$img_name;
        
        //validate newimage 
        if(empty($fname)||empty($lname)||empty($username)||empty($address)||empty($city)||empty($country)||empty($phonecode)||empty($phone)){
            $errors[] ="All fields are required!";
            }
        //validate image format
        if($img_size>2097152){
            $errors[] ="Image Size larger than 2 MB!";
            }

    //if no error 
        if(count($errors)== 0){
            if($img_tmp) move_uploaded_file($img_tmp,$target_file);
        
            $query = "UPDATE `member` SET `username` = '$username', fname = '$fname', `lname` = '$lname', `address`= '$address' ,country= '$country', city='$city', phonecode=$phonecode, phone=".($phone ? $phone : "''");

            if($img_tmp) $query .= ", imglink = '$target_file'";

            $query .= " WHERE id = $_SESSION[user_id]";
        
            mysqli_query($db,$query);
            //show it to homepage
            header('location:index.php?message='.urlencode("updating succesfully!"));
            exit;
            } else {
                $errors[] ="Error during updating!";
        }
    }
 ?>