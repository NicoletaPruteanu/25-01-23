<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
</head>
<body>
<?php
    //$fruits = array("Aplle", "Mango", "Chery");
    //echo json_encode($fruits);


    
    $jsonobj = '{"peter":35,"bob":67,"tom":87}';

    $obj = json_decode($jsonobj);

    echo $obj->peter;
    echo $obj->bob;
    echo $obj->tom;

    

?>
</body>
</html>