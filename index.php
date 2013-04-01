<?php 

$db = mysql_connect("localhost","pop","123"); //перевірка імені і паролю та з'єднання з базою даних
 mysql_select_db("content",$db); //вибірка певної бази даних
 
 
$query = "select * from ppp ORDER BY `id`";
$result = mysql_query($query, $db);

echo "<table border=1 height=20% align=center>", "<tr>","<td>" ,"Номер","</td>","<td>","Запитання","</td>","<td>","відп.1","</td>","<td>","відп.2","</td>","<td>","відп.3","</td>","<td>","відп.4","</td>","<td>","відп.5","</td>","<td>","№ прав. відп.","</td>" , "</tr>" ; 
     while($row = mysql_fetch_array($result))

           

 echo "<td>",   $row["id"], "</td>","<td>",$row["put"],"</td>","<td>",$row["vid1"],"</td>","<td>",$row["vid2"],"</td>","<td>",$row["vid3"],"</td>","<td>",$row["vid4"],"</td>","<td>",$row["vid5"],"</td>","<td>",$row["pvid"],"</td>",                                     "</tr>"  ;      



echo  "</table>";  
         
  


?>
