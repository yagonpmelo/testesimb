<?php
require("conexao.php");

function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

// Select all the rows in the markers table
$consulta = "SELECT * FROM markers";

$resultado = $conn->query($consulta)->fetchAll();

if(!$resultado) {
  print_r($conn->errorInfo());
}

//$conn = mysqli_query($conn, $consulta);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
foreach ($resultado as $marcador) {
  // Add to XML document node
  echo '<marker ';
  echo 'name="' . parseToXML($marcador['name']) . '" ';
  echo 'address="' . parseToXML($marcador['address']) . '" ';
  echo 'lat="' . $marcador['lat'] . '" ';
  echo 'lng="' . $marcador['lng'] . '" ';
  echo 'type="' . $marcador['type'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';



