<?php 
session_start();
include 'connection.php';
$id = $_SESSION['id'];

if (isset($_POST['isSignUp'])) {
    
$userType=$_POST['userType'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$img = $_FILES['img'];
$lat=$_POST['userLat'];
$lng=$_POST['userLng'];

// $img=$_FILES['img'];
// $id=$_POST['id'];

$fileName=$img['name'];
$fileTmpName=$img['tmp_name'];
$fileError=$img['error'];


$ext = pathinfo($fileTmpName , PATHINFO_EXTENSION);

$fileNewName=uniqid().".$ext";

$errors=[];
move_uploaded_file($fileTmpName , "img/$fileNewName");
$query="SELECT img FROM $userType WHERE id=$id";
$query_run=mysqli_query($con , $query);
$img= mysqli_fetch_assoc($query_run);
// print_r($img);
$oldNameImg=$img['img'];


// $errors=[];

// validation of name
if(empty($fname) || empty($lname) )
{
$errors[]= "name is required";
}elseif(!is_string($fname) ||!is_string($lname))
{
$errors[]="you should enter string name";
}

$query2 = "SELECT email FROM $userType WHERE email='$email' ";
$done2 = mysqli_query($con, $query2);

// validation of username
if(empty($email))
{
$errors[]= "email is required";
}elseif((mysqli_num_rows($done2) > 0))
{
    $row = mysqli_fetch_assoc($done2);
    $errors[]="email not available";
}


   

    //validate password
    if(empty($password))
    {
        $errors[]= 'password is required';
    }



//validation of phone
if(empty($phone))
{
    $errors[]="phone  is required";
}elseif(! is_numeric($phone))
{
    $errors[]="you should enter phone ";
}

if(empty($errors))
{
   
    
    $q = "INSERT INTO $userType (firstName,lastName,email,password,phone , img,latitude,longitude) VALUES ('$fname','$lname','$email','$password', '$phone' , '$fileNewName','$lat','$lng')";
      $newRes = mysqli_query($con, $q);
      $_SESSION['success'] = 'user added successful';
      $_SESSION['userType']=$userType;
      
     header("location: profile.php");
      

}else{
    
    $_SESSION['errors']=$errors;
    //header("location: index.php");
    echo '<html>';
    foreach ($errors as $value) {
    echo '<h3>',$value ,'</h3>';
    }
    echo '</html>';


}


}


?>