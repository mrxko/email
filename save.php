<?php
if(isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $data = $name . ' - ' . $email . "\n";
    
    $file = fopen('adatok.txt', 'a');
    fwrite($file, $data);
    fclose($file);
}
?>
