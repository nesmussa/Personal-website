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
        if($type=='uname'){
            $sql="UPDATE verifi SET uname='$dat'";
        }elseif($type=='pass'){
            $sql="UPDATE verifi SET uname='$dat'";
        }
        $res=mysqli_query($con,$sql);
        if(!$res){
            die(mysqli_error());
        }else{
            echo '<script>
      window.alert ("Succesfully Changed!!!");
    window.location.href = "chpas.php";
</script>';
        }
    }
}