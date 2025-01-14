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
    <link rel="stylesheet" type="text/css" href="cs.css">
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
            <table align="center"><tr><td>
                        <form>
                            <fieldset>
                                <table>
                                    <legend>Add data</legend>
                                    <tr><td><textarea rows="8" name="data" cols="29" style="background-color: #eeeeee" placeholder="Any thing alse to say"></textarea></td></tr>
                                    <tr><td><select style="width: 50mm;font-size: 20px; height: 7mm;" name="into">
                                                <option value="About">About me</option>
                                                <option value="Favorite">Favorite</option>
                                                <option value="Future">Future</option>
                                                <option value="Education">Education</option>
                                            </select> </td></tr>
                                    <tr><td align="center"><input style="width: 25mm;height: 9mm;font-size: 20px;background-color: #d0d0d0;" type="submit" value="Add" name="submit" formmethod="post" formaction="added.php"></td></tr>
                            </fieldset>
                        </form>
            </table></td></tr>   </table>
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
