<?php

if(isset($_POST['name']) && isset($_POST['email']) &&
        isset($_POST['gen']) && $_FILES['File']['size'] > 0) {
    $name=get_POST('name');
    $email=get_POST('email');
    $gender=get_POST('gen');
    $filename = $_FILES['File']['name'];
    $tmpname  = $_FILES['File']['tmp_name'];
    $filesize = $_FILES['File']['size'];
    $filetype = $_FILES['File']['type'];
    $fp = fopen($tmpname, 'r');
    $file = fread($fp, filesize($tmpname));
    $file = addslashes($file);
    fclose($fp);

    if(!get_magic_quotes_gpc()) {
        $filename = addslashes($filename);
    }
    $query = "
        INSERT INTO output_images
        (firstname, lastname, imageType, imageData) VALUES
        ('$name', '$email', '$filetype', '$file');";

    mysql_query($query) or die('Error, query failed');
}
?>
<?php
echo $name;
?>