<?php
$hname='localhost';
$uname='root';
$pass='';
$db='nes_web';
$con=mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die(mysqli_error());
}else{
    if(isset($_POST['submit'])){
        session_start();
        $teb=$_SESSION["tabel"];
        $col=$_SESSION["col"];
        $id=$_SESSION["id"];
        $data=$_POST['data'];
        $sql="UPDATE $teb SET $col='$data' WHERE No=$id";
        $result=mysqli_query($con,$sql);
        if(!$result)
        {
            die(mysqli_error());
        }
        else
        {
            header('location: More_choise.php');
        }}
}