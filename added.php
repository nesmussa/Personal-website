<?php

$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'nes_web';
$con = mysqli_connect($hname, $uname, $pass, $db);
if (!$con) {
    die(mysqli_error());
}else{
    if(isset($_POST['submit'])){
        $dat=$_POST['data'];
        $type=$_POST['into'];
        if($type=='About'){
            $sql="INSERT INTO about(about_paragraph)VALUE ('$dat')";
        }elseif($type=='Future'){
            $sql="INSERT INTO fuc(fuc_p)VALUE ('$dat')";
        }elseif($type=='Favorite'){
            $sql="INSERT INTO fov(fov_p)VALUE ('$dat')";
        }elseif($type=='Education'){
            $sql="INSERT INTO edu(edu_p)VALUE ('$dat')";
        }
        $res=mysqli_query($con,$sql);
        if(!$res){
            die(mysqli_error());
        }else{
            echo '<script>
      window.alert ("Succesfully added to '.$type.'!!!");
    window.location.href = "adddata.php";
</script>';
        }
    }
}