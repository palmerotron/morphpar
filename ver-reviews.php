<!DOCTYPE HTML>
<html>
<head>
    <title>Ver Reviews</title>
    <?php require_once('head.php'); ?>
</head>
<?php require_once('functions.php'); ?>
<body>
<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://172.105.103.192/reporte",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;
$responseArray = json_decode($response, true);
//var_dump($responseArray);
?>
<table class="table">
<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Nombre del Plato</th>
    <th>Nombre del Lugar</th>
    <th>Puntuacion</th>
    <th>Comentario</th>
</tr>

<?php
foreach($responseArray as $review) {
 $counter = 0;
 echo '<tr>';
 while($counter < 6){
    echo '<td>' . $review[$counter] . '</td>';
    $counter++;
 }  
 echo '</tr>';
}
?>
</table>
</body>
</html>