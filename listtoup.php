<?php
$hname='localhost';
$uname='root';
$pass='';
$db='nes_web';
$con=mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die(mysqli_error());
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nes.site: More...</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
<table width="1050" align="center"><tr><td>
            <div id="header" >
                <table align="center"  width="100%">
                    <tr>
                        <td colspan="8" align="center"><h1>Nes's Personal website</h1></td>
                    </tr>

                    <tr >
                        <th nowrap="nowrap"><a href="Home.php" class="hlink">Home</a></th>
                        <th nowrap="nowrap"><a href="about.php"class="hlink" > About me </a></th>
                        <th nowrap="nowrap"><a href="fav.php" class="hlink">Favorite</a></th>
                        <th nowrap="nowrap"><a href="fuch.php" class="hlink">Future</a></th>
                        <th nowrap="nowrap"><a href="edu.php" class="hlink">Education</a></th>
                        <th nowrap="nowrap"><a href="cont_us.php" class="hlink">Contact me</a></th>
                        <th nowrap="nowrap"><a href="feedback.php" class="hlink">Feedback</a></th>
                        <th nowrap="nowrap"><a href="more.php" class="hlink">more</a></th>
                    </tr>
                </table>
            </div>
            <hr/>
            <table border="1" align="center">
                <tr>
                    <th>Paragraph</th>
                    <th>Posted Date</th>
                    <th nowrap="">Update or Delate</th>

                </tr>
                <?php
                if(isset($_POST['submit'])){
                    $col=$_POST['into'];
                    if($col=='About') {
                        $sql = "SELECT * FROM about ORDER BY Posted DESC";
                        $res=mysqli_query($con,$sql);
                        while ($dat=mysqli_fetch_assoc($res)){
                            $id=$dat['No'];
                            session_start ();
                            $_SESSION["tabel"]='about';
                            $_SESSION["col"]='about_paragraph';
                            echo '<tr>
                     <td>'.$dat['about_paragraph'].'</td>
                     <td>'.$dat['Posted'].'</td>
                      <td ><a style=" background-color: #11e1ff;padding-left: 4mm ;padding-right: 4mm ;padding-top: 2mm ;padding-bottom: 2mm ;color: #000000;font-size: 5mm;text-decoration: none;" href="update.php?updateid='.$id.'">Update </a> &nbsp;&nbsp;&nbsp;&nbsp;<a  href="delete.php?deleteid='.$id.' " style=" background-color: #ff0000;padding-left: 4mm ;padding-right: 4mm ;padding-top: 2mm ;padding-bottom: 2mm ;color: #000000;font-size: 5mm;text-decoration: none;">Delate</a></td>
                     </tr>';
                        }
                    }elseif($col=='Favorite') {
                        $sql = "SELECT * FROM fov ORDER BY Posted DESC";
                        $res=mysqli_query($con,$sql);
                        while ($dat=mysqli_fetch_assoc($res)){
                            $id=$dat['No'];
                            session_start ();
                            $_SESSION["tabel"]='fov';
                            $_SESSION["col"]='fov_p';
                            echo '<tr>
                     <td>'.$dat['fov_p'].'</td>
                     <td>'.$dat['Posted'].'</td>
                      <td style="height: 12mm;"><a style=" background-color: #11e1ff;padding-left: 4mm ;padding-right: 4mm ;padding-top: 2mm ;padding-bottom: 2mm ;color: #000000;font-size: 5mm;text-decoration: none;" href="update.php?updateid='.$id.'">Update </a> &nbsp;&nbsp;&nbsp;&nbsp;<a  href="delete.php?deleteid='.$id.' " style=" background-color: #ff0000;padding-left: 4mm ;padding-right: 4mm ;padding-top: 2mm ;padding-bottom: 2mm ;color: #000000;font-size: 5mm;text-decoration: none;">Delate</a></td>
                     </tr>';
                        }
                    }elseif($col=='Future') {
                        $sql = "SELECT * FROM fuc ORDER BY Posted DESC";
                        $res=mysqli_query($con,$sql);
                        while ($dat=mysqli_fetch_assoc($res)){
                            $id=$dat['No'];
                            session_start ();
                            $_SESSION["tabel"]='fuc';
                            $_SESSION["col"]='fuc_p';
                            echo '<tr>
                     <td>'.$dat['fuc_p'].'</td>
                     <td>'.$dat['Posted'].'</td>
                     <td ><a style=" background-color: #11e1ff;padding-left: 4mm ;padding-right: 4mm ;padding-top: 2mm ;padding-bottom: 2mm ;color: #000000;font-size: 5mm;text-decoration: none;" href="update.php?updateid='.$id.'">Update </a> &nbsp;&nbsp;&nbsp;&nbsp;<a  href="delete.php?deleteid='.$id.' " style=" background-color: #ff0000;padding-left: 4mm ;padding-right: 4mm ;padding-top: 2mm ;padding-bottom: 2mm ;color: #000000;font-size: 5mm;text-decoration: none;">Delate</a></td>
                     </tr>';
                        }
                    }elseif($col=='Education') {
                        $sql = "SELECT * FROM edu ORDER BY Posted DESC";
                        $res=mysqli_query($con,$sql);
                        while ($dat=mysqli_fetch_assoc($res)){
                            $id=$dat['No'];
                            session_start ();
                            $_SESSION["tabel"]='edu';
                            $_SESSION["col"]='edu_p';
                            echo ' <tr>
                     <td>'.$dat['edu_p'].'</td>
                     <td>'.$dat['Posted'].'</td>
                      <td ><a style=" background-color: #11e1ff;padding-left: 4mm ;padding-right: 4mm ;padding-top: 2mm ;padding-bottom: 2mm ;color: #000000;font-size: 5mm;text-decoration: none;" href="update.php?updateid='.$id.'">Update </a> &nbsp;&nbsp;&nbsp;&nbsp;<a  href="delete.php?deleteid='.$id.' " style=" background-color: #ff0000;padding-left: 4mm ;padding-right: 4mm ;padding-top: 2mm ;padding-bottom: 2mm ;color: #000000;font-size: 5mm;text-decoration: none;">Delate</a></td>
                     </tr>';
                        }
                    }}?>
            </table>
            <hr/>
            <div class="footer">
                <table align="center" width="70%">
                    <tr>
                        <th align="center" colspan="3"><font size="5" color="#f0f8ff">Follow Me on</font></th>
                    </tr>
                    <tr>
                        <td width="40%" align="right"><a href="https://instagram.com/nes.mussa?igshid=MzNlNGNkZWQ4Mg==" target="_blank"><img src="img\inta.png" width="15%" height="15%"></a> </td>
                        <td align="center"><a href="https://www.tiktok.com/@nes.mussa/" target="_blank"><img src="img\tiktok.png" width="15%" height="15%"></a> </td>
                        <td width="40%"><a href="Login.html" target="_blank"><img src="img\yt.png" width="15%" height="15%"></a> </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center"><font color="#f0f8ff">prepared by Nes.mussa Copyright&#169;Reserved!<br/>2015 E.C</font></td>
                    </tr>
                </table>
            </div>
        </td></tr></table>
</body>
</html>

