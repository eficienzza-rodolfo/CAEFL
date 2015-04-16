<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<?php 
session_start();
include "conexion.php";
$usu = $_POST["usuario"];
$clv = $_POST["password"];

$result = mysql_query("SELECT * FROM usuarios WHERE
			usuario='$usu' and pass='$clv' ", $link);
			
			
			if(mysql_num_rows($result)==0){
					?>
                    <script language="javascript">
					alert("Usuario o Clave inválidos")
					window.location="index.html"
					
					</script>
                    <?php
			}
			else{
					header("Location:Nivel 2/index2.html");
			}
	
			?>




<body>
</body>
</html>