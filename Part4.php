<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  
  
$genre=array();
$genre['musicals'] =array (
'0'=> 'Oklahoma',
'1' => 'The Music Man ',
'2' => 'South Pacific' );
 
$genre['dramas'] = array(
'0' => 'Lawrence of Arabia',
'1'=> 'To Kill a Mockingbird',
'2' => 'Casablanca' );
      
    
    
$genre['mysteries']= array (
'0' => 'The Maltese Falcon' ,
'1' => 'Rear Window',
'2' => 'North by Northwest' );
foreach ($genre as $key => $value) { 
    echo strtoupper($key) . "</br>"; 
     foreach ($value as $sub_key => $sub_val) { 
         echo "---->".$sub_key." = ".$sub_val."</br>";}}  
         ?>

  </body>
</html>