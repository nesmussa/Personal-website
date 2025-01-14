<?php
$hname='localhost';
$uname='root';
$pass='';
$db='nes_web';
$con=mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die(mysqli_error());
}else{
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        session_start();
        $teb=$_SESSION["tabel"];
        $sql="DELETE FROM $teb WHERE No=$id";
        $result=mysqli_query($con,$sql);
        if(!$result)
        {
            die(mysqli_error());
        }
        else
        {
            header('location: More_choise.php');
        }
    }

}