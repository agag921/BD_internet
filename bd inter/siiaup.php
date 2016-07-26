<?php
   session_start();
   include('conexion.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#003399">
<div align="center">
<img src="logos.png" align="top" />
</div>

<div align="center" style="">
<h3>Porfavor Inicia Sesion</h3>
<form action="" method="get">
<table width="304" border="0">
  <tr>
    <td width="107" align="center">Código:</td>
    <td width="187"><input type="text" name="codigo" id="codigo" /></td>
  </tr>
  <tr>
    <td align="center"> nip:</td>
    <td><input type="password" name="nip" id="nip" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="aceptarbtn" id="aceptarbtn" value="Aceptar" /></td>
    </tr>
  <tr>
    <td colspan="2" align="center">
    <?php
	    if(!empty($_POST['codigo']) and !empty($_POST['nip'])){
			$codigo = $_POST['codigo'];
			$nip = $_POST['nip'];
			$consulta =mysql_query("SELECT * FROM TB_ALUMNO WHERE ID_ALUMNO='".$codigo."' and CONTRASEÑA='".$nip."'");
			if($dato=mysql_fetch_array($consulta)){
				    $_SESSION['ID_ALUMNO']=$dato['codigo'];
					$_SESSION['CONTRASEÑA']=$dato['nip'];
					
					header('location:bienvenidos.html');
				}else{
				   echo 'Usuario o Contraseña incorrectos';	
				}
			
			
		}
	?>
    </td>
  </tr>
</table>
</form>
</div>
</body>
</html>