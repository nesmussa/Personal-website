<?php

$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'nes_web';
$con = mysqli_connect($hname, $uname, $pass, $db);
if (!$con) {
    die(mysqli_error());
} else{
if(isset($_POST['send'])){
    $name=$_POST['Name'];
    $emil=$_POST['Email'];
    $ret=$_POST['rating'];
    $com=$_POST['com'];
    $sql="INSERT INTO feedback(Name,Email,rating,Comment) VALUES('$name','$emil','$ret','$com')";
    $res=mysqli_query($con,$sql);
    if(!$res){
        die(mysqli_error());
    }
    else{
        echo '<script>
      window.alert ("Succesfully Sent!!!");
    window.location.href = "feedback.php";
</script>';

    }
}}
?>