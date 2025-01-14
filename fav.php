<?php
$hname='localhost';
$uname='root';
$pass='';
$db='nes_web';
$con=mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die(mysqli_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nes.site: Favorite</title>
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
                        <th colspan="3" id="bheader">My favorite things</h1></th>
                    </tr>
                    <tr>
                        <td width="20%" valign="bottom"><img src="img\food1.jpeg" width=" 100%"></td>
                        <td colspan="2"><h2 align="center">From food</h2>
                            my favorite food is <strong>Shawarma</strong> which is a popular Middle Eastern dish that originated in the Ottoman Empire,
                            consisting of meat cut into thin slices, stacked in an inverted cone, and roasted on a slowly turning vertical rotisserie or spit.
                            Traditionally made with lamb or mutton, it may also be made with chicken, turkey, beef, or veal.
                        </td>

                    </tr>
                    <tr>
                        <td width="20%"><img src="img\milk.jpeg" width="100%"></td>
                        <td colspan="2"><h2 align="center">From drink</h2>I love <strong>milk</strong> more than any drink.there are many types of milks and i get chance to test three of them Cow milk,Goat milk and camel milk
                            cow milk is the most poplar and the best one and Camel milk is very thick I didn't like it at first time but I got used to it over time.
                        </td>
                    </tr>
                    <tr>
                        <td width="20%"><img src="img\che.jpeg" width="100%"></td>
                        <td colspan="2"><h2 align="center">International football club</font></h2>
                            I am big fan of <strong>Chelsea Football Club</strong> which is an English professional football club based in Fulham, West London.
                            Founded in 1905, they play their home games at Stamford Bridge. The club competes in the Premier League, the top division of English football</td>
                    </tr>
                    <tr>
                        <td width="20%" valign="bottom"><img src="img\chess.jpeg" width="100%"></td>
                        <td colspan="2"><h2 align="center">Game</h2>
                            I like to play <strong>Chess</strong> which is an abstract strategy game that involves no hidden information and no use of dice or cards. It is played on a chessboard with 64 squares arranged in an
                            eight-by-eight grid. At the start, each player controls sixteen pieces: one king, one queen, two rooks, two bishops, two knights, and eight pawns. White moves first, followed by Black.</td>
                    </tr>
                     <?php
            $sql="SELECT fov_p FROM fov";
            $res=mysqli_query($con,$sql);
            while ($dat=mysqli_fetch_assoc($res)){
                echo '<tr><td colspan="2"><p>'.$dat['fov_p'].'</p></td></tr>';
            }?>
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
