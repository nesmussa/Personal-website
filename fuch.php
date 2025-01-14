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
    <title>Nes.site: Future</title>
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
    <div>
        <table width="100%" align="center">
          <tr>
              <th id="bheader" colspan="2" align="center">My Future Plan</th>
          </tr>

            <tr>
            <td colspan="2"><p>Pre University i had planned to be an astronomer but i couldn't could not achieve my goal because there is no <acronym title="bachelor degree">B.A</acronym> of astrophysics education in Ethiopia so now when i get to university i was assigned at software engineering department
and I'm learning it</p>
               <p align="center"><img src="img\seng.jpeg" width="25%"></p>

                <p> after i graduate from university I have plan to crate new software that will benefit my society and the world bing software engineer is the bestco</p></td>
           </tr>
            <?php
            $sql="SELECT fuc_p FROM fuc";
            $res=mysqli_query($con,$sql);
            while ($dat=mysqli_fetch_assoc($res)){
                echo '<tr><td colspan="2"><p>'.$dat['fuc_p'].'</p></td></tr>';
            }
            ?>
        </table>
    </div>
    <hr/>
    <div class="footer">
        <table align="center" width="70%">
            <tr>
                <th align="center" colspan="3">Follow Me on</font></th>
            </tr>
            <tr>
                <td width="40%" align="right"><a href="https://instagram.com/nes.mussa?igshid=MzNlNGNkZWQ4Mg==" target="_blank" ><img src="img\inta.png" width="15%" height="15%" class="so"></a> </td>
                <td align="center"><a  href="https://www.tiktok.com/@nes.mussa/" target="_blank" ><img src="img\tiktok.png" width="15%" height="15%" class="so"></a> </td>
                <td width="40%"><a href="Login.html" target="_blank" ><img src="img\yt.png" width="15%" height="15%" class="so"></a> </td>
            </tr>
            <tr>
                <td colspan="3" align="center" id="copyright">prepared by Nes.mussa Copyright&#169;Reserved!<br/>2015 E.C</td>
            </tr>
        </table>
    </div>
</td></tr></table>
</body>
</html>