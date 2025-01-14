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
    <title>Nes.site: Contact me</title>
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
                <table align="center" width="70%" cellspacing="5">
                    <tr>
                        <th colspan="3" align="center"><font color="#36ffaf" size="10">Contact Me</font></th>
                    </tr>
                    <tr>
                        <td width="30%" align="right"><font color="#36daff" size="6" >Phone No:</font></td>
                        <td width="5%"><img src="img\call.png" width="100%"></td>
                        <td><font size="6" color="blue" >+251926785580<br/>+251988998278 </font></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right"><font color="#36daff" size="6" >Email:</font></td>
                        <td width="5%"><a href="mailto:emileifnm@gmail.com"><img src="img\gmail.png" width="100%"> </a></td>
                        <td><font size="6" ><a href="mailto:emileifnm@gmail.com">emileifnm@gmail.com</a> </font></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right"><font color="#36daff" size="6" >Telegram:</font></td>
                        <td width="5%"><a href="t.me/nes_mussa"><img src="img\tg.png" width="100%"> </a></td>
                        <td><font size="6" ><a href="t.me/nes_mussa">@nes_mussa</a> </font></td>
                    </tr>

                </table>
            </div>

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
<font color="#ffe4c4"