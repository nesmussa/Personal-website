<?php/*
$hname='localhost';
$uname='root';
$pass='';
$db='nes_web';
$con=mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die(mysqli_error());
}*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nes.site: Homepage</title>

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
                <table width="100%" align="center"><tr bgcolor="#0a0060">
                        <td colspan="2"><h2 align="center"><font size="8" color="#23ffa8">مرحبا بكم في موقع الخاص بي</font></h2></td>
                    <tr><td width="25%" ><img src="img\pic1.jpg" width="100%"></td>
                        <td bgcolor="#003f26"><p><font size="6" color="#52c3ff">Welcome,I am <i>Nesrelah</i> &#038; My friends call me <b>Nes</b> <br/>This is my personal website I hope you will love visiting it</p></td>
                    </tr>
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