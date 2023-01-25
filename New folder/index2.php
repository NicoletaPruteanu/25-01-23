<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
    $myXMLData=
    "<?xml version='1.0' encoding='UTF-8'?>
    <note>
    <to>Ana</to>
    <heading>Message</heading>
    <body>Hello</body>
    </note>";
    $xml=simplexml_load_string($myXMLData) or
    die("Error:Cannot creat object");
    print_r($xlm)
    ?>
</body>
</html>