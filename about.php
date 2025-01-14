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
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Nes.site: About me</title>
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
                <table align="center">

                    <tr>
                        <th id="bheader"> Hi I'm Nes</th>
                        <td width="20%" rowspan="2"><img src="img\pic2.jpg" width="100%"></td>
                    </tr>

                    <tr>
                        <td valign="bottom">I was Born in addis abeba Black lion hospital in 17 june 2003 GC.My Mother Name is <strong>Kedija Oumer</strong> and My Dad Name is <em>Mussa Ahimed </em>. I grew up with my
                            grandmother until i turn 8 years old Her Name is <strong>Aminat Hassen</strong> She was the best and lovely person i Know.
                            I love to spanned my time by crating and trying new things </td>
                    </tr>
                    <tr>
                        <td colspan="2">specially electronic devices. I have 2 Brothers and No Sister whom are smaller than me, I am the first child for my parents.
                            <p>I begin my school life earlier than most children, I start my nursery class when i was <em>2 years old</em> in BlueNile Academy
                                and I graduated from <abbr title="kindergarten"> KG</abbr> when i turn 5 years old at 2008 GC and i take Ministry exam when i turn 12 years old then i pass to university at 2021 GC. And now I am 3<sup>rd</sup> year Software Engineering Student
                                at Injibara University. When i was child i wan to be an astronomer and i used to read books,moves,documentary and so.. about astronomy but i could not achieve my goal because there is no <acronym title="bachelor degree">B.A</acronym> of astrophysics education in Ethiopia so i didn't get the accesses to learn.</p>
                            <p>In my religious life i start to learn quran when i was 5 years old at Lafto bilal Mosque and i finish quran when i was 8 years old and i continue my lesson by learning different types of islamic knowledge like <i>fiqih,aqida and haddis</i> in different places and i am still learning them this is my life in short thank you</p></td>
                    </tr>
                    <tr><td width="1050">
                    <?php
                    $sql="SELECT about_paragraph FROM about";
                    $res=mysqli_query($con,$sql);
                    while ($dat=mysqli_fetch_assoc($res)){
                        echo '<tr><td colspan="2"></p>'.$dat['about_paragraph'].'</p></td></tr>';
                    }
                    ?></td></tr>
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