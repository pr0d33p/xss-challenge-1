<!DOCTYPE html>
<html>
<head>
	<title>SOLO XSS #1</title>
<link rel="stylesheet" type="text/css" href="http://localhost/ctf/xss/css/locals/fa/style.css">
<style type="text/css">
	body{
		background-repeat: none;
		background-color: #f0f0f0;
	}
	input[type=text]{
		background:green;
		border-color:#ABEFFF;
		border-radius:10px;
		margin-top:10px;
		padding:5px;
		color:#ABEFFF;
	}
	input[type=submit]{
			background:blue;
			border-color:#ABEFFF;
			border-radius:10px;
			margin-top:10px;
			padding:5px;
			color:#ABEFFF;
	}
	
</style>
</head>
<body>
	<center><font size="150%" face="Cursive" color="red">SOLO XSS #1</font></center>
<center>
<form action="" method="GET"><input type="text" name="solo" placeholder="XSS1"><br>
<input type="text" name="nepal" placeholder="XSS2"><br>
<input type="submit" name="XSS" value="Submit"></form>
<script type="text/javascript">
	function hint() {
		alert('No Hint. :p')
	}
</script>
<input type="submit" name="hint" onclick="hint()" value="Hint">
</center>
</body>
<?php
error_reporting(0);
if(isset($_GET["XSS"])){

	function escape($param){
		$param = str_replace("/", "", $param);
		$param = str_replace("s", "", $param);
		$param = str_replace("img", "", $param);
		$param = str_replace("IMG", "", $param);
		$param = str_replace("SCRIPT", "", $param);
		$param = str_replace("'", "", $param);
		$param = str_replace('"', '', $param);
		$param = str_replace("test", "", $param);
		$param = str_replace("sCrIpT", "", $param);
		$param = str_replace("ScRiPt", "", $param);
		$param = str_replace("foo", "", $param);
		$param = str_replace("jpg", "", $param);
		$param = str_replace("png", "", $param);
		$param = str_replace("i", "", $param);
		$param = str_replace("m", "", $param);
		$param = str_replace("v", "", $param);
		$param = str_replace("g", "", $param);
		$param = str_replace("IMG", "", $param);
		$param = str_replace("onload", "", $param);
		$param = str_replace("ONLOAD", "", $param);
		return $param;
	}
	
	$solo = escape($_GET["solo"]);
	$nepal = escape($_GET["nepal"]);
}
else echo("<center><h3><font color=\"red\">[!] Enter the query.</font></h3></center>");
?>
</html>
<?php
  if($solo == "" or $nepal == "")
        {

            echo "<center><h3><font color=\"red\">[-] Nice try :p</font></h3></center>";       

        }

        else            
        { 

            echo " <center><h3><font color=\"red\">[+]Hmm...</font></h3><br>";
            echo htmlentities($solo);
            echo "<br>$nepal</center><b>" ;   

        }

 ?>
 <br><br>
 <center><h4>pm the query</h4></center>
 <center><font face="Cursive"  color="blue">Solvers:</font>
 		<pre><b>1) Somdev Sangwan</b><br>2 - 5 <b>Comeon solve it :p</b></pre></center>