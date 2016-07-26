<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">

<div align="center" style="border:dotted #333">

<?php

$hostname = "sql207.byethost15.com";
$database = "b15_17277967_BD_Login";
$username = "b15_17277967";
$password = "Giovanny53";

$conx = mysql_connect ($hostname, $username, $password);
If(!conx)die("Error al abrir". Mysqlcerrar());
mysql.select_db($database) or die ("Eror de DB");

$sql = "select * from  Usuarios";
$result =mysql_query ($sql) or die (mysql());
If(mysql_num_rows($result)==0) die ("No hay registro");
echo "<table>
<tr>               
       <th colspan= 5> Usuarios </th></tr>
<tr>

<th> id </th>
<th>nombre</th>
<th>email</th>
<th>telefono</th>
<th>edad</th>


<tr>";


while ($row = mysql_fetch_array($result))
{

echo "<tr>";
        
              echo "<td>".$row ['id']."</td>";
              echo "<td>".$row ['nombre']."</td>";
               echo "<td>".$row ['email']."</td>";
             echo "<td>".$row['telefono']."</td>";
			  echo "<td>".$row['edad']."</td>";
echo"</tr>";

}

echo "</table>";

?>

</div>

</body>
</html>