



<?php
session_start();
if(isset($_POST['loginB']))
{
    extract($_POST);
    include 'connection/connection.php';
    $sql=mysqli_query($conn,"SELECT * FROM register where email='$email' and username='$username' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["username"] = $row['username'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["password"]=$row['password']; 
        header("Location: naslov.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>