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
    <title>Nes.site: Education</title>
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
                <table align="center" width="100%">
                    <tr>
                        <th colspan="3" align="center" id="bheader">My Educational Background</th>
                    </tr>
                    <tr>
                        <td width="20%"><img src="img\kg.jpeg" width="100%"></td>
                        <td colspan="2"><h2 align="center"><acronym title="kindergarten">KG</acronym></h2>
                            <p>I start education at early age when I was 2years old.<b>BlueNile academy</b> was My first school.
                                i learn 3 years in that school, and I had graduated in 2000 EC (2008 GC) from <acronym title="kindergarten">KG</acronym></p>
                        </td>
                    </tr>
                    <tr>

                        <td width="20%"><img src="img\elm.jpeg" width="100%"></td>
                        <td colspan="2"><h2 align="center">Elementary school </h2>
                            <p>After i graduated from <acronym title="kindergarten">KG</acronym> i change school and get to <b>vision academy</b>
                                and I attend my lesson at that school upto Grade four but because of financial problem the school was closed, so I changed school to <b>Tesdal primary school</b> it was the best school.
                                I attend my lesson in that school until I turn grade 8 because the school doesn't have high school I left it.</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="20%"><img src="img\bgis.jpg" width="100%"></td>
                        <td colspan="2"><h2 align="center">High School </h2>
                            <p>At grade 9 I join <i>South West Academy</i> and Learn there upto Grade 10 it was fun to be there the school is high standard school
                                and i had so many friends there It's good to be there but as all human bing i prefer the best one and transferred to <abbr title="Bisrate Gebriel International School"><b>BGIS</b></abbr> Because it is International school and there is a chance of scholarship to best university of china,canada and <abbr title="United States">US</abbr>.
                                so i attend my course there and apply for scholarship to China but because of <abbr title="Coronavirus disease 2019">COVID-19</abbr> i stop the process and waited for University assignation by Ministry of Education</p></td>
                    </tr>
                    <tr>
                        <td width="20%"><img src="img\inu.jpg" width="100%"></td>
                        <td colspan="2"><h2 align="center">University</h2>
                            <p>After the announcement of the assignation I know that I was assigned to <b>Injibara Universe</b> I was happy by the result because I always wanted to join universe to make my family proud specially <strong>my Mother</strong> and i did it.
                                Now i am 3<sup>rd</sup> year student of Software Engineering department and i will graduate in 2017 EC inshallah.</p></td>
                    </tr>
                     <?php
            $sql="SELECT edu_p FROM edu";
            $res=mysqli_query($con,$sql);
            while ($dat=mysqli_fetch_assoc($res)){
                echo '<tr><td colspan="2"><p>'.$dat['edu_p'].'</p></td></tr>';
            }?>
                    <tr>
                        <td colspan="3" align="center"><font color="#36daff" size="8" >This is my educational background</font></td>
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