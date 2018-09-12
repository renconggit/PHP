<?php

// highlight_file("test.php");
echo mysqli_get_client_info() . '<br>';
echo mysqli_get_client_version();

print_r(getimagesize("img.png"));

$data = file_get_contents("img.png");
$size_info2 = getimagesizefromstring($data);
print_r($size_info2);
?>