<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $psw1=$_POST['psw1'];
    $psw2=$_POST['psw2'];
    if ($psw1 !== $psw2) {
        echo "Passwords do not match!";
        exit();
    }
    // $psw1 = md5($psw1);
    // $psw2 = md5($psw2);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(uname,email,psw1,psw2)
                       VALUES ('$uname','$email','$psw1','$psw2')";
            if($conn->query($insertQuery)==TRUE){
                header("Location: login.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $psw2=$_POST['psw2'];
   $psw2=md5($psw2) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and psw2='$psw2'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: genre.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>