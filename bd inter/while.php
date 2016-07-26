<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Practica cuatro switch</title>
<link href="CSS/index_style.css" rel="stylesheet" type="text/css">


<body bgcolor="cyan">
<div class="practicacuatro_switch" id="content" align="center" style="border:groove #F00">
<h1 align="center"><strong>Practica 4</strong></h1>
 <img src="pastel.gif"> <br>
		  <?php
		     
			 $tipo_pastel=0;
			 
	    Switch($tipo_pastel)
		{
        case 0:
                  echo "pastel de chocolate.";
        break;
       
        case 1: 
                  echo "pastel de vainilla";
        break;

         case 2: 
                  echo "pastel de zarzamora";
         break;
		 
		  case 3: 
                  echo "pastel de fresa";
         break;

         default:
                  echo "Elije una opción válida.";
		}
		  
		  ?>
  </div>
		</body>
    </html>