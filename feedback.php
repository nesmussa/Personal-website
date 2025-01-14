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
    <title>Nes.site: Feedback</title>
</head>
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
                <table width="28%" align="center" ><tr><td>
                            <form>
                                <fieldset>
                                    <legend><font size="5" color="#11e1ff">FeedBack</font></legend>
                                    <table width="100%">
                                        <tr>
                                            <td colspan="3"><input type="text" size="30" style="background-color: #eeeeee" name="Name" placeholder="Name"></td>
                                        </tr>
                                        <tr>

                                            <td colspan="3"><input type="email" size="30" style="background-color: #eeeeee" name="Email" placeholder="Email"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td width="50%">
                                                <div class="rating">
                                                    <input type="radio" value="5" name="rating" id="rating-1">
                                                    <label for="rating-1"></label>
                                                    <input type="radio" value="4" name="rating" id="rating-2">
                                                    <label for="rating-2"></label>
                                                    <input type="radio" value="3" name="rating" id="rating-3">
                                                    <label for="rating-3"></label>
                                                    <input type="radio" value="2" name="rating" id="rating-4">
                                                    <label for="rating-4"></label>
                                                    <input type="radio" value="1" name="rating" id="rating-5">
                                                    <label for="rating-5"></label>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><textarea rows="5" name="com" cols="29" style="background-color: #eeeeee" placeholder="Any thing alse to say"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td align="center" colspan="3"><input type="submit" value="send" name="send" formaction="feedsent.php" formmethod="post" width="15" height="5" style="width: 30mm;height: 10mm;background-color: #11e1ff"></td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </form></td></tr></table>
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
</body>
</html>
