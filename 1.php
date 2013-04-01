<?php 
if (isset($_POST['ru']))
{
  $ru = $_POST['ru'];
}
if (isset($_POST['nm']))
{
  $nm = $_POST['nm'];
}
if (isset($_POST['sk']))
{
  $sk = $_POST['sk'];
}
if (isset($_POST['re']))
{
  $re = $_POST['re'];
}
if (isset($_POST['ts']))
{
  $ts = $_POST['ts'];
}

if($re==$ru)
 {
   if ($nm==0)
       {
        $ts=0;
       }
     $ts++;
 }

if ($nm==0)
 {
  session_start();
  $_SESSION['username'] = $_POST['nam'];
  echo "<h4 align=left>Ви зайшли як: </h4><h3 style=color:#ff0000>",$_SESSION['username'], "</h3>"  ;
  }
 else
  {
  session_start();
  $_SESSION['username'] ;
   echo "<h4 align=left >Ви зайшли як:</h4><h3<h3 style=color:#ff0000>", $_SESSION['username'], "</h4>"  ;
  }
$sk=$sk+1;
$nm=$nm+1;
echo "<form action='1.php' method='post' >"; 
echo "<input name='nm' type='hidden' value=",$nm, "/>";
///++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$db = mysql_connect("localhost","pop","123"); //перевірка імені і паролю та з'єднання з базою даних
$query = "select * from ppp ORDER BY `id` ASC";
 mysql_select_db("content",$db); //вибірка певної бази даних
$result = mysql_query($query, $db);
$handle = mysql_query("select count(1) from ppp");
$tmp  = mysql_fetch_array($handle);
$j=$tmp[0];
   if ($j+1==$nm)
       {
 session_start();
  $_SESSION['ts'] = $_POST['ts'];        


  //echo  "  <h1>popuk  ",$ts,"sdafs" ,  "</h1> ";
	echo '<script type="text/javascript">';
	echo 'window.location.href="exi.php '.$url.'";';
	echo '</script>';

       }
   if ($nm==1)
       {
	$row1 = mysql_fetch_row($result);
	$sk=$row1[0];

	echo "<input name='sk' type='hidden' value=",$sk, "/>";
       }
echo "<input name='sk' type='hidden' value=",$sk, "/>";
$result = mysql_query($query, $db);
$result = mysql_query("SELECT * FROM ppp WHERE id=$sk");
	$sk=$sk+1;
$row = mysql_fetch_array($result);  
echo "<table width=400px  align=center> ";
echo  "<h2 style=color:#00008b>","<p align=center> ";
 echo $row["put"]  ;
echo "</h2></p>";
echo "<p align=left> <input type='radio' name='re'  value='1' cheked='cheked' />";
echo $row["vid1"];
echo "</p>";
echo "<p align=left> <input type='radio' name='re'  value='2' cheked='cheked' />";
echo $row["vid2"];
echo "</p>";
echo "<p align=left> <input type='radio' name='re'  value='3' cheked='cheked' />";
echo $row["vid3"];
echo "</p>";
echo "<p align=left> <input type='radio' name='re'  value='4' cheked='cheked' />";
echo $row["vid4"];
echo "</p>";
echo "<p align=left> <input type='radio' name='re'  value='5' cheked='cheked' />";
echo $row["vid5"];
echo "</p>";
$ru=$row["pvid"];
echo "<input name='kk'  type='hidden' value=",$j," />";
echo "<input name='ru'  type='hidden' value=",$ru," />";
echo "<input name='ts'  type='hidden' value=",$ts," />";
echo " <p align=center >&nbsp";
echo "<input name='ok' value='   NEXT   '    type='submit' /> ","</p>";
echo "</form>";

?>
