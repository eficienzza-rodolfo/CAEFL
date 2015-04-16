<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>.::Tinajitas::.</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
		<style type="text/css">
		#wrapper #nav p .icon.fa-home.active {
	text-align: center;
}
        body,td,th {
	color: #000000;
	border: #000000;
}
        </style>
		<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
	<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
	</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper-->
	<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
					  <p>Tinajitas		

                      
<a href="#me2" class="icon fa-home active"><span>Home </span></a>

<a href="#work" class="icon fa-folder"><span>Work</span></a>
 
<a href="#contact" class="icon fa-envelope"><span>Contact</span></a>

<a href="http://caefl.tk/Nivel%202/index2.html" class="icon fa-twitter"><span>Volver</span></a>
 </p>
						
  </nav>

<?php include "conexion3.php"; ?>
	  <!-- Main -->
		<div id="main">
						
			<!-- Me -->
			  <article class="panel" id="me2" name="me2">
                <header>
					<h2>
					<?php $frac = $_GET["frac1"];
				$query = mysql_query("SELECT frac FROM lotes WHERE nofrac = $frac GROUP BY frac ", $link);
				$result = mysql_fetch_row($query);
			    echo $result[0];
									 
										 ?></h2>
				</header>
<table  bgcolor="#CCCCCC" width="200" bordercolor="#000000" border="20">
 <tr>
  <td>
    <col width="48">
    <col width="62">
    <col width="95">
    <col width="112">
    <col width="103">
    <col width="152">
    <col width="116">
 <tr>
  <td width="110" colspan="2">No. de lotes</td>
  
  <?php $frac = $_GET["frac1"];
  $query = mysql_query("SELECT MAX( manzana ) FROM lotes WHERE nofrac = $frac ", $link);
  $rowcantidad = mysql_fetch_row($query);
  ?>
  <td width="95" align="right">
  <?php $frac = $_GET["frac1"];
    $query = mysql_query("SELECT count(*) FROM lotes WHERE nofrac = $frac ", $link);
	$result = mysql_fetch_row($query);
	
	echo $result[0];
	?>
  </td>
  <td width="112"></td>
  <td width="103"></td>
  <td width="152"></td>
  <td width="116"></td>
   </tr>
   <tr>
  <td colspan="2" >Lotes    pagados</td>
  <td align="right">


	<?php $frac = $_GET["frac1"];
    $query = mysql_query("SELECT count(*) FROM lotes WHERE pagos > 1 AND pagos = abonos AND nofrac = $frac ", $link);
	$result = mysql_fetch_row($query);
	echo $result[0];
	?>
  </td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
   </tr>
   <tr>
  <td colspan="2">Lotes    x pagar</td>
  <td align="right">
   <?php $frac = $_GET["frac1"]; 
   $query = mysql_query("SELECT count(*) FROM lotes WHERE abonos < pagos AND nofrac = $frac ", $link);
   $result = mysql_fetch_row($query);
   echo $result[0];
   ?></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
   </tr>
   <tr>
  <td colspan="2">Lotes    desocupados</td>
  <td align="right"> 
   <?php $frac = $_GET["frac1"]; 
   $query = mysql_query("SELECT count(*) FROM lotes WHERE abonos = 0 AND nofrac = $frac ", $link);
   $result = mysql_fetch_row($query);
   echo $result[0];
   ?>
  </td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
   </tr>
   <tr>
  <td colspan="2">Lotes    donados</td>
  <td align="right">
   <?php $frac = $_GET["frac1"]; 
   $query = mysql_query("SELECT count(*) FROM lotes WHERE donado = 'Si' AND nofrac = $frac ", $link);
   $result = mysql_fetch_row($query);
   echo $result[0];
   ?>
   </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
	 </tr>
	 <tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	 </tr>
	 <tr>
	<td></td>
	<td></td>
	<td colspan="5"><p>&nbsp;</p>
	  <p>Estado del fraccionamiento por manzanas.</p></td>
	 </tr>
	 <tr>
	<td></td>
	<td></td>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	 </tr>
	 <tr>
	<td>   Manzana</td>
	<td></td>
	<td>Numero       de lotes</td>
    <td>Lotes         pagados </td>
	<td>Lotes por pagar</td>
	<td>Lotes          desocupados</td>
	<td>Lotes         donados</td>
	 </tr>
	 <tr>
     
     <?php
  	echo ""."";
	
	
	for($i = 1; $i <= $rowcantidad[0]; $i++)
  {
	  
  
  	?>
	<td>
	<?php
	echo "M".$i;
    ?>
    </td>
	<td></td>
	<td>
	<?php $frac = $_GET["frac1"];
  	$query = mysql_query("SELECT count(lote) FROM lotes WHERE nofrac = $frac AND manzana = $i ", $link);
  	$result = mysql_fetch_row($query);
  	echo $result[0];
  	?></td>
    <td>
	<?php $frac = $_GET["frac1"];
    $query = mysql_query("SELECT count(*) FROM lotes WHERE pagos > 1 AND pagos = abonos AND nofrac = $frac AND manzana = $i", $link);
	$result = mysql_fetch_row($query);
	echo $result[0];
	?>
    </td>
	<td><?php $frac = $_GET["frac1"]; 
   $query = mysql_query("SELECT count(*) FROM lotes WHERE abonos < pagos AND nofrac = $frac AND manzana = $i", $link);
   $result = mysql_fetch_row($query);
   echo $result[0];
   ?></td>
	<td><?php $frac = $_GET["frac1"]; 
   $query = mysql_query("SELECT count(*) FROM lotes WHERE abonos = 0 AND nofrac = $frac AND manzana = $i ", $link);
   $result = mysql_fetch_row($query);
   echo $result[0];
   ?></td>
	<td><?php $frac = $_GET["frac1"]; 
   $query = mysql_query("SELECT count(*) FROM lotes WHERE donado = 'Si' AND nofrac = $frac AND manzana = $i ", $link);
   $result = mysql_fetch_row($query);
   echo $result[0];
   ?></td>
   </tr>
   <?php
   }
   ?>
  </td>
   </tr>
   </table>
                      
  	</article>
	  <!-- Work --> 
		  <article id="work" class="panel">
		  <header>
		  <h2>Tinajitas - Lotes</h2>
          
          
  
          
          <?php
  	echo $rowcantidad[0];
	
	
	for($i = 1; $i <= $rowcantidad[0]; $i++)
  {
	 
	 
	
  	?>
    
		  <div id="CollapsiblePanel1" class="CollapsiblePanel">
		  <div class="CollapsiblePanelTab" tabindex="0">Manzana <?php echo $i ?></div>
		  <div class="CollapsiblePanelContent">
		      <table bgcolor="#CCCCCC" cellspacing="0" cellpadding="0">
		        <col width="80" span="2">
		        <col width="214">
		        <col width="80" span="4">
		          <tr >
		          <td width="80" height="15"><p align="center">                                        
		             <p align="center">Manzana</p></td>
		          <td width="80" height="15"><p align="center">Lote</p></td>
		          <td width="214" height="15"><p>Dueño</p></td>
		          <td width="80" height="15"><p>Pagos</p></td>
		          <td width="80" height="15"><p>Abonos</p></td>
		          <td width="80" height="15"><p>Debe</p></td>
		          <td width="80" height="15"><p>Atraso</p></td>
		          <td width="80">Cantidad atrasada</td>
		          </tr>
                  
        <?php
  	
  	$query = mysql_query("SELECT MAX( lote ) FROM lotes WHERE (nofrac = $frac) AND (manzana = $i)", $link);
  $lotecantidad = mysql_fetch_row($query);
  

	
	
	for($j = 1; $j <= $lotecantidad[0]; $j++)
  	{
  	?>
	            <tr>
                                          
								            <td align="right"><div align="center"><?php echo $i?></div></td>
								            <td align="right"><div align="center"><?php
   echo $j;
   ?></div></td>
								            <td><?php $frac = $_GET["frac1"];
  	$query = mysql_query("SELECT dueno FROM lotes WHERE nofrac = $frac AND manzana = $i AND lote = $j ", $link);
  	$result = mysql_fetch_row($query);
  	echo $result[0];
  	?></td>
								            <td><?php $frac = $_GET["frac1"];
  	$query = mysql_query("SELECT pagos FROM lotes WHERE nofrac = $frac AND manzana = $i AND lote = $j ", $link);
  	$pagos = mysql_fetch_row($query);
  	echo $pagos[0];
  	?></td>
								            <td><?php $frac = $_GET["frac1"];
  	$query = mysql_query("SELECT abonos FROM lotes WHERE nofrac = $frac AND manzana = $i AND lote = $j ", $link);
  	$abonos = mysql_fetch_row($query);
  	echo $abonos[0];
  	?></td>
								            <td><?php echo $debe = $pagos[0] - $abonos[0]?></td>
								            <td>0</td>
								            <td>&nbsp;</td>
                </tr>
								          <tr>
                                          
                                          <?php
   }
   ?>
								            <td align="right">&nbsp;</td>
								            <td align="right">&nbsp;</td>
								            <td>&nbsp;</td>
								            <td>&nbsp;</td>
								            <td>&nbsp;</td>
								            <td>&nbsp;</td>
								            <td>&nbsp;</td>
								            <td>$1231.78</td>
							              </tr>
            </table>
	        </div>
						        </div>
<p>&nbsp;</p>
                               
                                <p>
                                  <?php
   }
   ?>
                                </p>
<p>&nbsp; </p>
            <p>&nbsp;</p>
		    </header>
<p>
</article>

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>Asignar lote a usuario</h2>
							  </header>
							  <form action="dtguardados3.php" method="post">
									<div>
										<div class="row">
											<div class="6u">
												<input type="text" name="manzana" placeholder="Manzana" />
											</div>
											<div class="6u">
												<input type="text" name="lote" placeholder="Lote" />
											</div>
										</div>
                                        
                                        
                                        <div class="row">
                                        
                                        <div class="6u">
												<input type="text" name="dueno" placeholder="Dueno" />
										  </div>
											<div class="6u">
												<input type="text" name="pagos" placeholder="Pagos" />
											</div>
                                            
											<div class="6u">
												<input type="text" name="abonos" placeholder="Abonos" />
											</div>
											<div class="6u">
												<input type="text" name="pagocantidad" placeholder="PagoCantidad" />
											</div>
                                            <div class="6u">
												<input type=date (yyyy-mm-dd) name="fecha" />
											</div>
                                            
										</div>
									  <div class="row">
										  <div class="12u"></div>
									  </div>
										<div class="row">
											<div class="12u"></div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" value="Guardar Datos" />
											</div>
										</div>
									</div>
							  </form>
							</article>

	  </div>
		
				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; ZEBRASFOT</li>
						</ul>
					</div>
		
			</div>
    <script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
    </script>
	</body>
</html>